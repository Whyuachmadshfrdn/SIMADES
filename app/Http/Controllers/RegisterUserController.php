<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function create(Request $request)
    {
        return view('auth.register');
    }
}
