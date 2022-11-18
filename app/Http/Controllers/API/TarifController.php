<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function getTarif(){
        $tarif = Tarif::get();
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Tarif',
            'data' => $tarif,
        ];
        return response()->json($respon);
    }

    public function tarif($id){

        $tarif = Tarif::where('id', $id)->get();
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Tarif',
            'data' => $tarif,
        ];
        return response()->json($respon);
    }
}
