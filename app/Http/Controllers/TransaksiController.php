<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Tarif;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(){
        return view('transaksi.index', [
            'transaksis' => Transaksi::all(),
            'title' => 'Transaksi'
        ]);
    }
    
    public function create(){
        return view('transaksi.create', [
            'tarifs' => Tarif::all(),
            'users' => User::all(),
            'title' => 'Tansaksi'
        ]);
    }

    public function store(Request $request){

        DB::table('transaksis')->insert([
            'tanggal' => $request->tanggal,
            'jumlahbeli' => $request->jumlahbeli,
            'nometer' => $request->nometer,
            'totalkwh' => $request->totalkwh,
            'token' => $request->token,
            'tarif_id' => $request->tarif_id,
            'user_id' => $request->user_id,
        ]);

        return redirect('/transaksi')->with('success', 'Transaksi Berhasil Ditambahkan');
    }

    public function read(Transaksi $id){
        return view('transaksi.read', [
            'transaksi' => $id,
            'transaksis' => Transaksi::all(),
            'title' => 'Transaksi',
        ]);
    }

    public function edit($id)
    {
		$transaksi = DB::table('transaksis')->where('id',$id)->get();
		return view('transaksi.edit',[
            'transaksis' => $transaksi,
            'tarifs' => Tarif::all(),
            'users' => User::all(),
            'title' => 'Transaksi'
        ]);
    }

    public function update(Request $request)
    {
		DB::table('transaksis')->where('id',$request->id)->update([
            'tanggal' => $request->tanggal,
            'jumlahbeli' => $request->jumlahbeli,
            'nometer' => $request->nometer,
            'totalkwh' => $request->totalkwh,
            'token' => $request->token,
            'tarif_id' => $request->tarif_id,
            'user_id' => $request->user_id,
		]);
		
		return redirect('/transaksi');
    }
    
	public function hapus($id)
	{
        DB::table('transaksis')->where('id',$id)->delete();
        
		return redirect('/transaksi');
	}
    
    public function beli(){
        return view('user.create', [
            'tarifs' => Tarif::all(),
            'users' => User::all(),
            'title' => 'Tansaksi'
        ]);
    }

    public function riwayat($id)
    {
        $transaksi = Transaksi::where('user_id', $id)->get();
        return view('user.riwayat',[
            'transaksis' => $transaksi,
            'tarifs' => Tarif::all(),
            'users' => User::all(),
            'title' => 'Transaksi'
        ]);
    }

    public function tambah(Request $request){

        DB::table('transaksis')->insert([
            'tanggal' => $request->tanggal,
            'jumlahbeli' => $request->jumlahbeli,
            'nometer' => $request->nometer,
            'totalkwh' => $request->totalkwh,
            'token' => $request->token,
            'tarif_id' => $request->tarif_id,
            'user_id' => $request->user_id,
        ]);

        return redirect('/user')->with('success', 'Transaksi Berhasil Ditambahkan');
    }


}
