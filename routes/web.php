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
    Route::get('/prodi',[UserController::class,'index_prodi'])->name('dashboardprodi')->middleware('prodi');
    Route::get('/test',[UserController::class,'test'])->name('test');
//    Route::get('/perwalian',[UserController::class,'index'])->name('perwalian');
});

