<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Exports\WargaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\WargaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wargas = Warga::latest()->paginate(10);
        return view('layouts.admin.warg.warga', compact('wargas'));
    }

    public function wargaimport(Request $request){
        Excel::import(new WargaImport, $request->excel);
        return redirect()->route('warga')->with('success', 'User Import Successfully');
    }

    public function wargaexport(){
        return Excel::download(new WargaExport,'warga.xlsx');
    }

    public function create()
    {
        return view('layouts.admin.warg.warga-add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kk' => 'required',
            'nik_warga' => 'required',
            'nama_warga' => 'required',
            'jenis_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'gol_darah' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'shdk' => 'required',
            'pendidikan_akhir' => 'required',
            'pekerjaan' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'rt' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
        ]);
       
        $foto = $request->file('foto');
        $foto->storeAs('public/warga', $foto->hashName());

        $wargas = Warga::create([
            'kk' => $request->kk,
            'nik_warga' => $request->nik_warga,
            'nama_warga' => $request->nama_warga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gol_darah' => $request->gol_darah,
            'agama' => $request->agama,
            'status_perkawinan' => $request->status_perkawinan,
            'shdk' => $request->shdk,
            'pendidikan_akhir' => $request->pendidikan_akhir,
            'pekerjaan' => $request->pekerjaan,
            'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'rt' => $request->rt,
            'foto' => $foto->hashName()
        ]);

        if($wargas){
            return redirect()->route('warga.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('warga.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $wargas = Warga::find($id);
        return view('layouts.admin.warg.detail-warga', compact('wargas'));
    }

    public function edit($id)
    {
        $wargas = Warga::find($id);
        return view('layouts.admin.warg.ubah-warga', compact('wargas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kk' => 'required',
            'nik_warga' => 'required',
            'nama_warga' => 'required',
            'jenis_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'gol_darah' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'shdk' => 'required',
            'pendidikan_akhir' => 'required',
            'pekerjaan' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'rt' => 'required',
        ]);

        $wargas = Warga::findOrFail($id);
        
        if($request->file('foto') == "") {
            $wargas->update([
                'kk' => $request->kk,
                'nik_warga' => $request->nik_warga,
                'nama_warga' => $request->nama_warga,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tmpt_lahir' => $request->tmpt_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'gol_darah' => $request->gol_darah,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'shdk' => $request->shdk,
                'pendidikan_akhir' => $request->pendidikan_akhir,
                'pekerjaan' => $request->pekerjaan,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,
                'alamat' => $request->alamat,
                'kelurahan' => $request->kelurahan,
                'rt' => $request->rt,
            ]);
        } else {

            Storage::disk('local')->delete('public/warga/'.$wargas->foto);
            $foto = $request->file('foto');
            $foto->storeAs('public/warga', $foto->hashName());

            $wargas->update([
                'kk' => $request->kk,
                'nik_warga' => $request->nik_warga,
                'nama_warga' => $request->nama_warga,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tmpt_lahir' => $request->tmpt_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'gol_darah' => $request->gol_darah,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'shdk' => $request->shdk,
                'pendidikan_akhir' => $request->shdk,
                'pekerjaan' => $request->shdk,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,
                'alamat' => $request->alamat,
                'kelurahan' => $request->kelurahan,
                'rt' => $request->rt,
                'foto' => $foto->hashName()
            ]);
        }

        if($wargas){
            return redirect()->route('warga')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('warga')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $wargas = Warga::where('id',$id)->first();

        if ($wargas !=null) {
            $wargas->delete();
            return redirect()->route('warga')->with(['message'=> 'Berhasil Terhapus!!']);
        }
        
        return redirect()->route('warga')
                         ->with(['message'=> 'GAGAL!!']);
    }
}
