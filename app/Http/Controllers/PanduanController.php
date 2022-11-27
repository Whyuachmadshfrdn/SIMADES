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
            // 'gambar' =>'required'
        ]);


        $panduans = Panduan::findOrFail($id);

        if($request->file('gambar') == "") {
            $panduans->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
        } else {

            Storage::disk('local')->delete('public/warga/'.$panduans->gambar);
            $gambar = $request->file('foto');
            $gambar->storeAs('public/warga', $gambar->hashName());

            $panduans->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambar->hashName()
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
