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

use App\Http\Controllers\GenreController;

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/genre',[GenreController::class,'index'])->name('genreList');
    Route::get('/genre/create',[GenreController::class,'create'])->name('createGenre');
    Route::post('/genre/create',[GenreController::class,'store'])->name('storeGenre');
    Route::get('/genre/edit/{genre}',[GenreController::class,'edit'])->name('editGenre');
    Route::post('/genre/edit/{genre}',[GenreController::class,'update'])->name('updateGenre');
    Route::get('/genre/delete/{genre}',[GenreController::class,'destroy'])->name('deleteGenre');
});


