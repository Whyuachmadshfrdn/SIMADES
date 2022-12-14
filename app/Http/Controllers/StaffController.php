<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::latest()->paginate(100);
        return view('admin.staf.staff', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staf.staff-add');
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
            'nip_staff' =>'required',
            'nama_staff' =>'required',
            'tmpt_lahir' =>'required',
            'tgl_lahir' =>'required',
            'jenis_kelamin' =>'required',
            'jabatan' =>'required',
            'no_telp' =>'required',
            'email' =>'required',
            'foto' =>'required|image|mimes:png,jpg,jpeg',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/staff', $foto->hashName());

        $staff = Staff::create([
            'nip_staff' => $request->nip_staff,
            'nama_staff' => $request->nama_staff,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'foto' => $foto->hashName()
        ]);

        if($staff){
            return redirect()->route('staff')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('staff')->with(['error' => 'Data Gagal Disimpan!']);
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
        // return view('staff.show', compact('staff'));
            $staff = Staff::find($id);
            return view('admin.staf.detail-staff', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('admin.staf.ubah-staff', compact('staff'));
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
            'nip_staff' =>'required',
            'nama_staff' =>'required',
            'tmpt_lahir' =>'required',
            'tgl_lahir' =>'required',
            'jenis_kelamin' =>'required',
            'jabatan' =>'required',
            'no_telp' =>'required',
            'email' =>'required',
        ]);

        $staff = Staff::findOrFail($id);

        if($request->file('foto') == "") {
            $staff->update([
                'nip_staff' => $request->nip_staff,
                'nama_staff' => $request->nama_staff,
                'tmpt_lahir' => $request->tmpt_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
            ]);
        } else {

            Storage::disk('local')->delete('public/staff/'.$staff->foto);

            $foto = $request->file('foto');
            $foto->storeAs('public/staff', $foto->hashName());

            $staff->update([
                'nip_staff' => $request->nip_staff,
                'nama_staff' => $request->nama_staff,
                'tmpt_lahir' => $request->tmpt_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'foto' => $foto->hashName()
            ]);
        }

        if($staff){
            return redirect()->route('staff')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('staff')->with(['error' => 'Data Gagal Diupdate!']);
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
        $staff = Staff::where('id',$id)->first();

        if ($staff !=null) {
            $staff->delete();
            return redirect()->route('staff')->with(['message'=> 'Berhasil Terhapus!!']);
        }
        
        return redirect()->route('staff')
                         ->with(['message'=> 'GAGAL!!']);
    }
}
