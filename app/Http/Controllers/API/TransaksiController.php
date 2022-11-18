<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function getTransaksi(){
        $transaksi = Transaksi::get();
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Transaksi',
            'data' => $transaksi,
        ];
        return response()->json($respon);
    }

    public function transaksi($id){

        $transaksi = Transaksi::where('id', $id)->get();
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Transaksi',
            'data' => $transaksi,
        ];
        return response()->json($respon);
    }
}
