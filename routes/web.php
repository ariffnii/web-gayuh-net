<?php

use App\Http\Controllers\Auth\UserController;
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



