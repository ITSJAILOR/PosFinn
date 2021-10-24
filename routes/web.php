<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersediaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembukuanController;
use App\Http\Controllers\PembelianControllerr;
use App\Http\Controllers\SupplierController;

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
Route::get('/login', function () {return view('login');});
Route::get('/persediaan', function () {return view('Persediaan');});
Route::get('/pembelian', function () {return view('Pengeluaran');});
Route::get('/supplier', function () {return view('Supplier');});

Route::get('/barang/read',[PersediaanController::class,'read']);
Route::get('/barang/read/{id}',[PersediaanController::class,'show']);
Route::get('/barang/cari',[PersediaanController::class,'search']);
Route::get('/barang/edit/{id}',[PersediaanController::class,'edit']);
Route::get('/barang/update/{id}',[PersediaanController::class,'update']);


Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/transaksi',[TransaksiController::class,'read']);

Route::get('/Pembukuan',[PembukuanController::class,'index']);
Route::get('/Pembukuan/Akun',[PembukuanController::class,'akun']);

Route::get('/pembelian/read',[PembelianControllerr::class,'read']);
Route::get('/pembelian/read/{id}',[PembelianControllerr::class,'show']);
Route::get('/pembelian/store',[PembelianControllerr::class,'store']);
Route::get('/pembelian/update',[PembelianControllerr::class,'update']);


Route::get('/supplier/read',[SupplierController::class,'read']);
Route::get('/supplier/read/{id}',[SupplierController::class,'show']);
Route::get('/supplier/cari',[SupplierController::class,'search']);
Route::get('/supplier/store',[SupplierController::class,'store']);
Route::get('/supplier/edit/{id}',[SupplierController::class,'edit']);
Route::get('/supplier/update/{id}',[SupplierController::class,'update']);
Route::get('/supplier/destroy/{id}',[SupplierController::class,'destroy']);






