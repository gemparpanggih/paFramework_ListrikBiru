<?php

use App\Http\Controllers\TransaksiController;
use App\Models\Pelanggan;
use App\Models\Tarif;
use App\Models\Transaksi;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TarifController;
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
    return view('index', [
        'tarifs' => Tarif::all(),
    ]);
});

//Route Utama

Route::get('/user', function () {
    return view('user.index', [
        'transaksis' => Transaksi::all(),
    ]);
})->middleware('checkRole:pelanggan');

Route::get('/daftarTarif', function () {
    return view('user.tarif', [
        'tarifs' => Tarif::all(),
    ]);
})->middleware('checkRole:pelanggan');

Route::get('/admin', function () {
    return view('admin.index', [
    ]);
})->middleware('checkRole:admin');

//Route Login dan Register

Route::get('/login', function () {  return 'Halaman Login'; })->name('login');

Route::get('/user/{nama}', function ($name) {
    return view('user', ['name' => $name]);
});

Route::get('/register', function () { 
    return view('register'); 
})->name('register');

Route::POST('/action-register', 
    [AuthController::class, 'actionRegister']
);

Route::get('/login', [AuthController::class, 'loginView'])->name("login");

Route::POST('/action-login', 
    [AuthController::class, 'actionLogin']
);

Route::get('/logout', [AuthController::class, 'logout']);

//Route Sistem

Route::get('/tabel', [AuthController::class, 'index'])->name('user.tabel')->middleware('checkRole:admin');
Route::get('/tabel/hapus/{id}', [AuthController::class, 'hapus'])->name('user.hapus')->middleware('checkRole:admin');


Route::get('/tarif', [TarifController::class, 'index'])->name('tarif.index')->middleware('checkRole:admin');
Route::get('/tarif/create', [TarifController::class, 'create'])->name('tarif.create')->middleware('checkRole:admin');
Route::post('/tarif/store', [TarifController::class, 'store'])->name('tarif.store')->middleware('checkRole:admin');
Route::get('/tarif/read/{id}', [TarifController::class, 'read'])->name('tarif.read')->middleware('checkRole:admin');
Route::get('/tarif/edit/{id}', [TarifController::class, 'edit'])->name('tarif.update')->middleware('checkRole:admin');
Route::post('/tarif/update', [TarifController::class, 'update'])->middleware('checkRole:admin');
Route::get('/tarif/hapus/{id}', [TarifController::class, 'hapus'])->middleware('checkRole:admin');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index')->middleware('checkRole:admin');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create')->middleware('checkRole:admin');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store')->middleware('checkRole:admin');
Route::get('/transaksi/read/{id}', [TransaksiController::class, 'read'])->name('transaksi.read')->middleware('checkRole:admin');
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit'])->name('transaksi.update')->middleware('checkRole:admin');
Route::post('/transaksi/update', [TransaksiController::class, 'update'])->middleware('checkRole:admin');
Route::get('/transaksi/hapus/{id}', [TransaksiController::class, 'hapus'])->middleware('checkRole:admin');

Route::get('/transaksi/user', [TransaksiController::class, 'beli'])->name('transaksi.user')->middleware('checkRole:pelanggan');
Route::post('/transaksi/tambah', [TransaksiController::class, 'tambah'])->name('transaksi.tambah')->middleware('checkRole:pelanggan');
Route::get('/transaksi/riwayat/{id}', [TransaksiController::class, 'riwayat'])->name('transaksi.riwayat')->middleware('checkRole:pelanggan');