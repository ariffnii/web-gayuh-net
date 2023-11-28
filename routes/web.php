<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BerandaOperatorController;
use App\Http\Controllers\BerandaPelangganController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('index');
});
Route::get('admin/data-pegawai', function () {
    return view('admin/data-pegawai');
});
Route::get('admin/data-pelanggan', function () {
    return view('admin/data-pelanggan');
});
Auth::routes();

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function () {
    //ini route untuk operator
    Route::get('beranda', [BerandaOperatorController::class, 'index'])->name('operator.beranda');
});

Route::prefix('pelanggan')->middleware(['auth', 'auth.pelanggan'])->group(function () {
    //ini route untuk pelanggan
    Route::get('beranda', [BerandaPelangganController::class, 'index'])->name('pelanggan.beranda');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');