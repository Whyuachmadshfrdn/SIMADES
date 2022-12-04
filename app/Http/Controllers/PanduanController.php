<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panduan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        $this->validate($request, [
            'judul' =>'required',
            'deskripsi' =>'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $gambar = date('ymd'). '-' . $request->gambar->extension();
        $request->file('gambar')->move(public_path('storage/panduan'), $gambar);
        
        Panduan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar

        ]);

        return redirect()->route('panduan.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $request->validate([]);

        $panduan = $request->all();
        $panduans = Panduan::findOrFail($id);

        if($gambar = $request->file('gambar')) {
            File::delete('storage/panduan'.$panduans->gambar);
            $file_name = $request->gambar->getClientOriginalName();
            $gambar->move(public_path('storage/panduan'), $file_name);
            $panduan['gambar'] = "$file_name";
        } else {

            unset($panduans['gambar']);
        }

        $panduans->update($panduan);

        if($panduans){
            return redirect()->route('panduan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('panduan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }

    }

    public function destroy($id)
    {
        $panduans = Panduan::find($id);
        $panduans->delete();
        File::delete('storage/panduan/'.$panduans->gambar);
        return redirect()->back()->with(['success', 'panduan Berhasil Terhapus!!']);
    }
}
