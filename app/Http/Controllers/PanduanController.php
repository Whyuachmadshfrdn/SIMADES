<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panduan;
use Illuminate\Support\Facades\Storage;

class PanduanController extends Controller
{
    public function index()
    {
        $panduans = Panduan::all();
        return view('admin.panduans.panduan', compact('panduans'));
    }

    public function create()
    {
        return view('admin.panduans.panduan-add');
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'judul' =>'required',
            'deskripsi' =>'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/panduan', $gambar->hashName());
        
        $panduans = Panduan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar->hashName()

        ]);

        if($panduans){
            return redirect()->route('panduan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('panduan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $panduans = Panduan::find($id);
        return view('admin.panduans.detail-panduan', compact('panduans'));
    }

    public function edit($id)
    {
        $panduans = Panduan::find($id);
        return view('admin.panduans.ubah-panduan', compact('panduans'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' =>'required',
            'deskripsi' =>'required',
            'gambar' =>'required'
        ]);


        $panduans = Panduan::findOrFail($id);

        if($request->file('gambar') == "") {
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


        if($panduans){
            return redirect()->route('panduan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('panduan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }

    }

    public function destroy($id)
    {
        $panduans = Panduan::where('id',$id)->first();

        if ($panduans !=null) {
            $panduans->delete();
            return redirect()->route('panduan.index')->with(['message'=> 'Berhasil Terhapus!!']);
        }
        
        return redirect()->route('panduan.index')
                         ->with(['message'=> 'GAGAL!!']);
    }
}
