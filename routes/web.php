<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('landing-page');
});
Route::get('/beranda', function () {
    return view('index');
});
Route::get('/gin', function () {
    return view('auth.login-sneat');
});

Auth::routes();

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function () {
    //ini route untuk operator
    Route::get('beranda', [BerandaOperatorController::class, 'index'])->name('operator.beranda');
    Route::resource('user', UserController::class );
    Route::resource('pelanggan', PelangganController::class);
});

Route::prefix('pelanggan')->middleware(['auth', 'auth.pelanggan'])->group(function () {
    //ini route untuk pelanggan
    Route::get('beranda', [BerandaPelangganController::class, 'index'])->name('pelanggan.beranda');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');
