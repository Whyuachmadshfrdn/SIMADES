<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\KategoriSuratController;

use App\Models\Staff;
use App\Models\Warga;
use Illuminate\Support\Facades\Hash;

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
    return redirect('/login');
});


// Route::get('/login', [RegisterUserController::class, 'create']);
// Route::get('/register', [RegisterUserController::class, 'create']);

Route::middleware(['auth', 'roles:admin,staff,warga,kades'])->group(function () {
    //akses Admin
    Route::middleware(['roles:admin'])->group(function () {

        Route::get('/staff', [StaffController::class, 'index'])->name('staff');
        Route::get('/staff-add', [StaffController::class, 'create'])->name('staff-add');
        Route::post('/add-staff', [StaffController::class, 'store'])->name('add-staff');
        Route::get('/staff-detail/{id}', [StaffController::class, 'show'])->name('staff-detail');
        Route::get('/staff-edit/{id}', [StaffController::class, 'edit'])->name('staff-edit');
        Route::post('/update-staff/{id}', [StaffController::class, 'update'])->name('update-staff');
        Route::get('/staffdelete/{id}', [StaffController::class, 'destroy'])->name('staffdelete');

        Route::get('/manajemen-index', [UserController::class, 'index'])->name('manajemen-index');
        Route::get('/manajemen-add', [UserController::class, 'create'])->name('manajemen-add');
        Route::post('/add-manajemen', [UserController::class, 'store'])->name('add-manajemen');
        Route::get('/manajemen-detail/{id}', [UserController::class, 'show'])->name('manajemen-detail');
        Route::get('/manajemen-edit/{id}', [UserController::class, 'edit'])->name('manajemen-edit');
        Route::post('/update-manajemen/{id}', [UserController::class, 'update'])->name('update-manajemen');
        Route::get('/manajemendelete/{id}', [UserController::class, 'destroy'])->name('manajemendelete');


    });
    
    Route::middleware(['roles:admin,staff'])->group(function () {

        Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');

        Route::post('wargaimport', [WargaController::class, 'wargaimport'])->name('wargaimport');
        Route::get('wargaexport', [WargaController::class, 'wargaexport'])->name('wargaexport');
        Route::get('/warga', [WargaController::class, 'index'])->name('warga');
        Route::get('/warga-add', [WargaController::class, 'create'])->name('warga-add');
        Route::post('/add-warga', [WargaController::class, 'store'])->name('add-warga');
        Route::get('/warga-detail/{id}', [WargaController::class, 'show'])->name('warga-detail');
        Route::get('/ubah-warga/{id}', [WargaController::class, 'edit'])->name('ubah-warga');
        Route::post('/updatewarga/{id}', [WargaController::class, 'update'])->name('updatewarga');
        Route::get('/wargadelete/{id}', [WargaController::class, 'destroy'])->name('wargadelete');

        Route::get('/add', [KategoriSuratController::class, 'create'])->name('add');
        Route::post('/add-kategori', [KategoriSuratController::class, 'store'])->name('add-kategori');
        Route::get('/detail-kategori/{id}', [KategoriSuratController::class, 'show'])->name('detail-kategori');
        Route::get('/edit-kategori/{id}', [KategoriSuratController::class, 'edit'])->name('edit-kategori');
        Route::post('/update-kategori/{id}', [KategoriSuratController::class, 'update'])->name('update-kategori');
        Route::get('/kategoridelete/{id}', [KategoriSuratController::class, 'destroy'])->name('kategoridelete');

        Route::get('/keluarga', [KeluargaController::class, 'index'])->name('keluarga');
    });

    Route::middleware(['roles:warga'])->group(function () {
        Route::get('/dashboard-warga', [WargaController::class, 'dashboard'])->name('dashboard-warga');


    });

    // Route::middleware(['roles:kades'])->group(function () {

    // });


    
    
});




// Pelayanan
Route::get('/index', [KategoriSuratController::class, 'index'])->name('index');
Route::get('/konfir-pelayanan', [KategoriSuratController::class, 'index'])->name('konfir-pelayanan');


// surat
Route::get('/ajukan', [SuratController::class, 'index'])->name('ajukan');
Route::get('/add-pengajuan', [SuratController::class, 'create'])->name('add-pengajuan');
Route::post('/add-surat', [SuratController::class, 'store'])->name('add-surat');
Route::get('/surat-detail/{id}', [SuratController::class, 'show'])->name('surat-detail');
Route::get('/surat-edit/{id}', [SuratController::class, 'edit'])->name('surat-edit');
Route::post('/update-surat/{id}', [SuratController::class, 'update'])->name('update-surat');
Route::get('/suratdelete/{id}', [SuratController::class, 'destroy'])->name('suratdelete');
Route::get('/list-surat-user', [SuratController::class, 'listSurat'])->name('list-surat');
Route::get('/download-surat/{id}', [SuratController::class, 'downloadSurat'])->name('download-surat');
Route::get('/kades-verifikasi', [SuratController::class, 'kadesUpdate'])->name('kades-verifikasi');
Route::get('/staff-verifikasi', [SuratController::class, 'staffUpdate'])->name('staff-verifikasi');


// Panduan
Route::resource('panduan', PanduanController::class);


Route::get("sdnafdcjacmsancas", function(){
    foreach (\App\Models\Warga::all() as $warga){
        $user = \App\Models\User::create([
            'name' => $warga->nama_warga,
            'email' => $warga->nik_warga,
            'role' => "warga",
            'password' => bcrypt($warga->nik),
        ]);
        $warga->user_id = $user->id;
        $warga->save();
    }
    
});

require('auth.php');

