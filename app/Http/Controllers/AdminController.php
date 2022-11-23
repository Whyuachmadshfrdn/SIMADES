<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;


class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard-admin');
    }
}
