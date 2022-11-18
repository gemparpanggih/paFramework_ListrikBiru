<?php

use App\Http\Controllers\API\TarifController;
use App\Http\Controllers\API\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tarif', [TarifController::class, 'getTarif']);

Route::get(
    '/tarif/{id}',
    [TarifController::class, 'tarif']
);

Route::get('/transaksi', [TransaksiController::class, 'getTransaksi']);

Route::get(
    '/transaksi/{id}',
    [TransaksiController::class, 'transaksi']
);