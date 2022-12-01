<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use App\Models\Staff;
use App\Models\Kategori;
use App\Models\Pengajuan;



class AdminController extends Controller
{
    public function index()    
    {
        $wargas = Warga::all(); 
        $staff = Staff::all();
        $kategori = Kategori::all();
        $pengajuan = Pengajuan::all();
        return view('admin.dashboard-admin', compact('wargas','staff','kategori','pengajuan'));
    }
}
