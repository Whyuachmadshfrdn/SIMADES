<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\IsianKategori;
use App\Models\LampiranKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.pelayanan.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelayanan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis_surat' => 'required',
            'deskripsi' => 'required',
            'icon' => 'required',
            'persyaratan' => 'required',
        ]);
       
        $templete = $request->file('templete_surat');
        
        $nameFile = time().'_'.$templete->getClientOriginalName();
        $templete->storeAs('public/kategori/templete-surat',$nameFile );

        $kategori = Kategori::create([
            'jenis_surat' => $request->jenis_surat,
            'deskripsi' => $request->deskripsi,
            'icon' => $request->icon,
            'persyaratan' => $request->persyaratan,
            'templete_surat' => $nameFile,

        ]);

        if($kategori){
            $isian = explode(',', $request->isian);
            foreach ($isian as $key => $value) {
                $name = strtolower($value);
                $name = str_replace(" ","_",$name);
                IsianKategori::create([
                    'kategori_id'=> $kategori->id,
                    'title' =>$value,
                    'name' => $name
                ]);
            }
            $lampiran = explode(',', $request->lampiran);
            foreach ($lampiran as $key => $value) {
                $name = strtolower($value);
                $name = str_replace(" ","_",$name);
                LampiranKategori::create([
                    'kategori_id'=> $kategori->id,
                    'title' =>$value,
                    'name' => $name
                ]);
            }
            return redirect()->route('index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);
        $isian_kategori = IsianKategori::where('kategori_id', $id)->get();
        return view('admin.pelayanan.detail', compact('kategori','isian_kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        $isian_kategori = IsianKategori::where('kategori_id', $id)->get();
        return view('admin.pelayanan.edit', compact('kategori','isian_kategori'));
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
        $this->validate($request, [
            'jenis_surat' => 'required',
            'deskripsi' => 'required',
            'icon' => 'required',
            'persyaratan' => 'required',
            
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update([
            'jenis_surat' => $request->jenis_surat,
            'deskripsi' => $request->deskripsi,
            'icon' => $request->icon,
            'persyaratan' => $request->persyaratan,
        ]);

        $isian_kategori = IsianKategori::where("kategori_id", $kategori->id)->get();
        foreach ($isian_kategori as $key => $value) {
            if (!in_array($value->item, explode(",", $request->isian))) {
                $value->delete();
            }
        }
        foreach (explode(",", $request->isian) as $key => $value) {
            if ($isian_kategori->where("item", $value)->first() == null) {
                IsianKategori::create([
                    "kategori_id" => $id,
                    "item" => $value,
                ]);
            }
        }

        if($request->file('templete_surat')) {
            Storage::disk('local')->delete('public/kategori/templete-surat/'.$kategori->templete_surat);
            $templete = $request->file('templete_surat');
            $templete->storeAs('public/kategori/templete-surat', $templete->hashName());
            $kategori->update([
                'templete_surat' => $templete->hashName()
            ]);
        } 
            
        if($kategori){
            return redirect()->route('index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('index')->with(['error' => 'Data Gagal Diupdate!']);
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::where('id',$id)->first();

        if ($kategori !=null) {
            $kategori->delete();
            return redirect()->route('index')->with(['message'=> 'Berhasil Terhapus!!']);
        }
        
        return redirect()->route('index')
                         ->with(['message'=> 'GAGAL!!']);
    }
}

