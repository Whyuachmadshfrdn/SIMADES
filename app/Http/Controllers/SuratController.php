<?php

namespace App\Http\Controllers;

use App\Models\IsianKategori;
use App\Models\LampiranKategori;
use App\Models\IsianPengajuan;
use App\Models\LampiranPengajuan;
use App\Models\Kategori;
use App\Models\Pengajuan;
use App\Models\NoSurat;
use App\Models\Warga;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.surats.ajukan', compact('kategori'));
    }

    public function listSurat(){
        if (auth()->user()->role == 'warga') {
            $data['pengajuans'] = Pengajuan::with('kategori')->where('user_id',auth()->id())->get();
        } else {
            $data['pengajuans'] = Pengajuan::with('kategori')->get();
        }
        
        return view('admin.surats.status', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kategori_id = $request->pilih_kategori;
        $isian = IsianKategori::where('kategori_id', $request->pilih_kategori)->get();
        $lampiran = LampiranKategori::where('kategori_id', $request->pilih_kategori)->get();
        return view('admin.surats.add-pengajuan', compact('isian','lampiran', 'kategori_id'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allRequest = $request->all();
        $noSurat = NoSurat::orderByDesc('no')->first();
        if(!$noSurat){
            $noSurat = NoSurat::create(['no'=>1]);
        } else {
            $noSurat->update([
                'no' => $noSurat->no+1
            ]);
        }
        $kategori = Kategori::with('lampiran','isian')->findOrFail($request->kategori_id);
        $template = new \PhpOffice\PhpWord\TemplateProcessor(public_path('storage/kategori/templete-surat/'.$kategori->templete_surat));
        $warga = Warga::where('user_id',auth()->user()->id)->first();
        try {
            $suratNumber = $noSurat->no;
            $tanggalLahir = $warga->tmpt_lahir.', '.$warga->tgl_lahir;
            $template->setValue('no_surat',$suratNumber);
            $template->setValue('nama_warga',$warga->nama_warga);
            $template->setValue('nik',$warga->nik_warga);
            $template->setValue('tempat_tanggal_lahir',$tanggalLahir);
            $template->setValue('agama',$warga->agama);
            $template->setValue('status_perkawinan',$warga->status_perkawinan);
            $template->setValue('pekerjaan',$warga->pekerjaan);
            $template->setValue('alamat_warga',$warga->alamat);
        } catch (\Throwable $th) {
            //throw $th;
        }
        $pengajuan = Pengajuan::create([
            'user_id' => auth()->id(),
            'kategori_id' => $request->kategori_id,
        ]);

        foreach($kategori->lampiran as $lampiran){
            
            if(array_key_exists($lampiran->name,$allRequest)){
                $lampirans = $request->file($lampiran->name);
                $lampirans->storeAs('public/surat/lampiran', $lampirans->hashName());

                LampiranPengajuan::create([
                    'pengajuan_id' => $pengajuan->id,
                    'item' => $lampiran->name,
                    'value' => $lampirans->hashName() 
                ]);
            }
        }

        foreach($kategori->isian as $isian){
            if(array_key_exists($isian->name,$allRequest)){

                IsianPengajuan::create([
                    'pengajuan_id' => $pengajuan->id,
                    'item' => $isian->name,
                    'value' => $allRequest[$isian->name] 
                ]);

                $template->setValue($isian->name,$allRequest[$isian->name]);
            }
        }
        
        $template->setValue('tanggal',$pengajuan->created_at->format('d-m-Y'));
        $timeNow = time();
        $saveDocPath = public_path('storage/surat/surat-pengajuan/'.$kategori->jenis_surat.$timeNow.'.docx');
        $template->saveAs($saveDocPath);

        $pengajuan->update([
            'file' => $kategori->jenis_surat.$timeNow.'.docx'
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $isian_kategori = IsianKategori::find($id);
        return view('admin.pelayanan.edit', compact('isian_kategori'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::find($id);
        $isian = IsianPengajuan::where('pengajuan_id',$id)->get();
        foreach ($isian as $key => $value) {
            $value->delete();
        }
        $lampiran = LampiranPengajuan::where('pengajuan_id',$id)->get();
        foreach ($lampiran as $key => $value) {
            $value->delete();
        }

        $pengajuan->delete();

        return redirect()->back();
    }

    public function staffUpdate(Request $request)
    {
        $pengajuan = Pengajuan::find($request->id);
        if ($request->status == 1) {
            $pengajuan->update(['status' => 'menunggu verifikasi kades']);
        } else {
            $pengajuan->update(['status' => 'tolak']);
        }
    }

    public function kadesUpdate(Request $request)
    {
        $pengajuan = Pengajuan::find($request->id);
        if ($request->status == 1) {
            $pengajuan->update(['status' => 'selesai']);
        } else {
            $pengajuan->update(['status' => 'tolak']);
        }

        return redirect()->back();
    }

    public function showLampiran($id)
    {
        $pengajuan = Pengajuan::find($request->id);
        
        $data['lampirans'] = LampiranPengajuan::where('pengajuan_id',$id)->get();
        $data['lampiran_categories'] = LampiranKategori::where('kategori_id',$pengajuan->kategori_id)->get();
        return view('admin.surats.lampiran', $data);
    }
}
