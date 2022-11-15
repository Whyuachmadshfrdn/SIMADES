<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PanduanController;
use App\Models\Staff;
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

// Route::resource('warga', WargaController::class);
Route::post('wargaimport', [WargaController::class, 'wargaimport'])->name('wargaimport');
Route::get('wargaexport', [WargaController::class, 'wargaexport'])->name('wargaexport');
Route::get('/warga', [WargaController::class, 'index'])->name('warga');
Route::get('/warga-add', [WargaController::class, 'create'])->name('warga-add');
Route::post('/add-warga', [WargaController::class, 'store'])->name('add-warga');
Route::get('/warga-detail/{id}', [WargaController::class, 'show'])->name('warga-detail');
Route::get('/ubah-warga/{id}', [WargaController::class, 'edit'])->name('ubah-warga');
Route::post('/updatewarga/{id}', [WargaController::class, 'update'])->name('updatewarga');
Route::get('/wargadelete/{id}', [WargaController::class, 'destroy'])->name('wargadelete');

// Staff
// Route::resource('staff', StaffController::class);
Route::get('/staff', [StaffController::class, 'index'])->name('staff');
Route::get('/staff-add', [StaffController::class, 'create'])->name('staff-add');
Route::post('/add-staff', [StaffController::class, 'store'])->name('add-staff');
Route::get('/staff-detail/{id}', [StaffController::class, 'show'])->name('staff-detail');
Route::get('/staff-edit/{id}', [StaffController::class, 'edit'])->name('staff-edit');
Route::post('/update-staff/{id}', [StaffController::class, 'update'])->name('update-staff');
Route::get('/staffdelete/{id}', [StaffController::class, 'destroy'])->name('staffdelete');




Route::resource('panduan', PanduanController::class);



