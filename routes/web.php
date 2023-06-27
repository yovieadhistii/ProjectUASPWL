<?php

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

use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PerwalianController;
use \App\Http\Controllers\UserController;

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/mahasiswa',[UserController::class,'index'])->name('dashboardmahasiswa')->middleware('mahasiswa');
    Route::get('/profil',[UserController::class,'profil'])->name('profil');
    Route::get('/profil/edit/{user}',[UserController::class,'edit'])->name('editProfile');
    Route::post('/profil/edit/{user}',[UserController::class,'update'])->name('updateProfile');
    Route::post('/profil/editphoto/{user}',[UserController::class,'updatephoto'])->name('updateProfilePhoto');
    Route::get('/prodi',[UserController::class,'index_prodi'])->name('dashboardprodi')->middleware('prodi');
    Route::get('/test',[UserController::class,'test'])->name('test');
    Route::get('/perwalian',[PerwalianController::class,'index'])->name('perwalian');
    Route::post('/perwalian/checkout',[PerwalianController::class,'create'])->name('checkoutDKBS');
    Route::post('/perwalian/store',[PerwalianController::class,'store'])->name('tambahDKBS');


    Route::get('/matkul',[MataKuliahController::class,'lihatMataKuliah'])->name('lihatMataKuliah');
    Route::get('/matkul/create/{id}',[MataKuliahController::class,'create'])->name('createMataKuliah');
    Route::post('/matkul/create/{id}',[MataKuliahController::class,'store'])->name('storeMataKuliah');
    Route::get('/matkul/{kode}',[MataKuliahController::class,'destroy'])->name('deleteMataKuliah');
});

