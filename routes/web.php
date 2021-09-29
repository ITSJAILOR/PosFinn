<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersediaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembukuanController;

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

Route::get('/', function () {return view('index');});
Route::get('/nav', function () {return view('nav');});
Route::get('/persediaan', function () {return view('Persediaan');});
Route::get('/pengeluaran', function () {return view('Pengeluaran');});

Route::get('/read',[PersediaanController::class,'read']);
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/transaksi',[TransaksiController::class,'read']);

Route::get('/Pembukuan',[PembukuanController::class,'index']);
Route::get('/Pembukuan/Akun',[PembukuanController::class,'akun']);
