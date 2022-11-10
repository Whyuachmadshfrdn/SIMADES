<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panduan;
use Illuminate\Support\Facades\Storage;

class PanduanController extends Controller
{
    public function index()
    {
        $panduans = Panduan::latest()->paginate(100);
        return view('layouts.admin.panduans.panduan', compact('panduans'));
    }

    public function create()
    {
        return view('layouts.admin.panduans.panduan-add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' =>'required',
            'deskripsi' =>'required',
        ]);
        
        $panduans = Panduan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi

        ]);

        if($panduans){
            return redirect()->route('panduan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('panduan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $panduans = Panduan::where('id', $id)->get();
        return view('layouts.admin.panduans.detail-panduan', compact('panduans'));
    }

    public function edit($id)
    {
        $panduans = Panduan::find($id);
        return view('layouts.admin.panduans.ubah-panduan', compact('panduans'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' =>'required',
            'deskripsi' =>'required'

        ]);

        $panduans = Panduan::findOrFail($id);
        $panduans->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

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
