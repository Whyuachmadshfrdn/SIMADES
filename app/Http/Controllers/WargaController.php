<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\User;
use App\Exports\WargaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\WargaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function datakeluarga()
    {
        $wargas = Warga::where('shdk', 'Kepala Keluarga')->get();
        return view('admin.family.keluarga', compact('wargas'));
    }

    public function detkeluarga($id)
    {
        $kepala_keluarga = Warga::find($id);
        $wargas = Warga::where("kk", $kepala_keluarga->kk)->where("nik_warga", "!=", $kepala_keluarga->nik_wargas)->get();
        return view("admin.family.detail-keluarga", compact('wargas', 'kepala_keluarga'));
    }

    public function gendata()
    {
        $wargas = Warga::whereNull('user_id')->get();
        return View('admin.warg.create-akun', compact('wargas'));
    }

    public function gendatapost()
    {
        foreach (Warga::whereNull('user_id')->get() as $wargas){

            $user = User::create([
                'name' => $wargas->nama_warga,
                'email' => $wargas->nik_warga,
                'role' => "warga",
                'password' => bcrypt($wargas->nik_warga),
            ]);
            $wargas->user_id = $user->id;
            $wargas->save();
        }
        
        return redirect()->back();
    }

    public function dashboard()
    {
        return View('wargas.dashboard-warga');
    }
    public function index()
    {
        $wargas = Warga::all();
        return view('admin.warg.warga', compact('wargas'));
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
        return view('admin.warg.warga-add');
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
       
        $foto = $request->nama_warga.'-'.date('ymd'). '.' . $request->foto->extension();
        $request->file('foto')->move(public_path('storage/warga'), $foto);


        Warga::create([
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
            'foto' => $foto
        ]);

        return redirect()->route('warga')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    public function show($id)
    {
        $wargas = Warga::find($id);
        // dd($wargas);
        return view('admin.warg.detail-warga', compact('wargas'));
    }

    public function edit($id)
    {
        $wargas = Warga::find($id);
        return view('admin.warg.ubah-warga', compact('wargas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([]);

        $warga = $request->all();
        $wargas = Warga::findOrFail($id);
        
        if($foto = $request->file('foto')) {
            File::delete('storage/warga'.$wargas->foto);
            $file_name = $request->foto->getClientOriginalName();
            $foto->move(public_path('storage/warga'), $file_name);
            $warga['foto'] = "$file_name";
            
        } else {

           unset($wargas['foto']);
        }

        $wargas->update($warga);
        // dd($wargas);
        if($wargas){
            return redirect()->route('warga')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('warga')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $wargas = Warga::find($id);
        $wargas->delete();
        File::delete('storage/warga/'.$wargas->foto);
        return redirect()->back()->with(['success', 'panduan Berhasil Terhapus!!']);
    }
}
