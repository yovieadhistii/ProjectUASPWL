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
use \App\Http\Controllers\MahasiswaController;
use \App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('dashboardmahasiswa');
    Route::get('/perwalian',[MataKuliahController::class,'index'])->name('perwalian');
    Route::get('/Prodi/dashboardProdi', [DashboardProdiController::class,'index'])->name('dashboardProdi');
    Route::get('/Prodi/create',[DashboardProdiController::class,'create'])->name('createProdi');
    Route::post('/Prodi/create',[DashboardProdiController::class,'store'])->name('storeProdi'); 
    Route::get('/matkul/dashboard', [MataKuliahController::class,'index'])->name('lihatMK');
    Route::get('/matkul/create', [MataKuliahController::class,'create'])->name('createMK');
    Route::post('/matkul/create',[MataKuliahController::class,'store'])->name('storeMK'); 
});

