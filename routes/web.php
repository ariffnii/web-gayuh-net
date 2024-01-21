<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JangkauanController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\PaketInternetController;
use App\Http\Controllers\AdminPelangganController;
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

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    //ini route untuk admin
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
    Route::resource('user', UserController::class );
    Route::resource('pelanggan', AdminPelangganController::class);
    Route::resource('paket_internet', PaketInternetController::class);
    Route::resource('jangkauan_internet', JangkauanController::class);
});

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function () {
    //ini route untuk operator
    Route::get('beranda', [BerandaOperatorController::class, 'index'])->name('operator.beranda');
});

Route::prefix('pelanggan')->middleware(['auth', 'auth.pelanggan'])->name('pelanggan.')->group(function () {
    //ini route untuk pelanggan
    Route::get('beranda', [BerandaPelangganController::class, 'index'])->name('beranda');
    Route::resource('jangkauan_internet', AreaController::class);
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');
