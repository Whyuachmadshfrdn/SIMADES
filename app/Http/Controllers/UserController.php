<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.manajemen.manajemen-index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manajemen.manajemen-add');
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
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);

        if($users){
            return redirect()->route('manajemen-index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('manajemen-index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $users = User::find($id);
        return view('admin.manajemen.manajemen-detail', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.manajemen.manajemen-edit', compact('users'));
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
            'name' => 'required',
            'email' => 'required',
            // 'role' => 'required',
            'password' => 'required',
        ]);

        $users = User::find($id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'role' => $request->role,
            'password' => $request->password,
        ]);

        if($users){
            return redirect()->route('manajemen-index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('manajemen-index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $users = User::where('id',$id)->first();

        if ($users !=null) {
            $users->delete();
            return redirect()->route('manajemen-index')->with(['message'=> 'Berhasil Terhapus!!']);
        }
        
        return redirect()->route('manajemen-index')
                         ->with(['message'=> 'GAGAL!!']);
    }
}
