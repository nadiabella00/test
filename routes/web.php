<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/paket', [App\Http\Controllers\PaketController::class, 'index'])->name('paket');

Route::get('/histori', [App\Http\Controllers\HistoriController::class, 'index'])->name('historiPe');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/uploadhistori', [App\Http\Controllers\historiUController::class, 'index'])->name('historiU');

