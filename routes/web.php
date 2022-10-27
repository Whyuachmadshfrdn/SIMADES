<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PanduanController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [RegisterUserController::class, 'create']);
Route::get('/register', [RegisterUserController::class, 'create']);
Route::get('/dashboard-admin', [AdminController::class, 'index']);

// Warga
// Route::get('warga', [WargaController::class, 'index']);
// Route::get('warga-add', [WargaController::class, 'create']);
// Route::get('detail-warga', [WargaController::class, 'store']);
// Route::post('detail-warga', [WargaController::class, 'store']);

Route::resource('warga', WargaController::class);
Route::resource('staff', StaffController::class);
Route::resource('panduan', PanduanController::class);



