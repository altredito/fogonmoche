<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','inicio')->name('inicio');
Route::get('menu', 'App\Http\Controllers\PlatosController@index')->name('menu');
Route::view('galeria', 'galeria')->name('galeria');
Route::view('about', 'about')->name('about');
Route::view('contacto','contacto')->name('contacto');
Route::get('reservas','App\Http\Controllers\ReservasController@index')->name('reservas.index');
Route::get('reservas/create','App\Http\Controllers\ReservasController@create')->name('reservas.create');
Route::get('reservas/{id}/edit','App\Http\Controllers\ReservasController@edit')->name('reservas.edit');
Route::patch('reservas/{id}','App\Http\Controllers\ReservasController@update')->name('reservas.update');
Route::post('reservas','App\Http\Controllers\ReservasController@store')->name('reservas.store');
Route::get('reservas/{name}','App\Http\Controllers\ReservasController@show')->name('reservas.show');
Route::delete('reservas/{id}','App\Http\Controllers\ReservasController@destroy')->name('reservas.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('profileimage','App\Http\Controllers\ProfileImageController@store')->name('profileimage.store');
Route::patch('profileimage', 'App\Http\Controllers\ProfileImageController@update')->name('profileimage.update');
Route::delete('profileimage', 'App\Http\Controllers\ProfileImageController@destroy')->name('profileimage.destroy');
require __DIR__.'/auth.php';
