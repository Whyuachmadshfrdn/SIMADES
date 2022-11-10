<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PanduanController;
use App\Models\Warga;

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

Route::resource('warga', WargaController::class);
// Route::get('warga', [WargaController::class, 'index']);
Route::post('wargaimport', [WargaController::class, 'wargaimport'])->name('wargaimport');

Route::get('/warga', [WargaController::class, 'index'])->name('warga');
Route::get('/warga-add', [WargaController::class, 'create'])->name('warga-add');
Route::post('/add-warga', [WargaController::class, 'store'])->name('add-warga');
Route::get('/warga-detail/{id}', [WargaController::class, 'show'])->name('warga-detail');
Route::get('/ubah-warga/{id}', [WargaController::class, 'edit'])->name('ubah-warga');
Route::post('/updatewarga/{id}', [WargaController::class, 'update'])->name('updatewarga');
Route::get('/wargadelete/{id}', [WargaController::class, 'delete'])->name('wargadelete');






// Route::get('/exportwarga', 'WargaController@WargaExport')->name('exportwarga');


Route::resource('staff', StaffController::class);
Route::resource('panduan', PanduanController::class);



