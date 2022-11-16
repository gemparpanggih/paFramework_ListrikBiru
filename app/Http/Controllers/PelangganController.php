<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Pembayaran;
use App\Models\Penggunaan;
use App\Models\Tagihan;
use App\Models\Tarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index(){
        return view('pelanggan.index', [
            'pelanggans' => Pelanggan::all(),
            'title' => 'Pelanggan'
        ]);
    }
    
    public function create(){
        return view('pelanggan.create', [
            'title' => 'Pelanggan'
        ]);
    }

    public function store(Request $request){
        DB::table('pelanggans')->insert([
            'username' => $request->username,
            'password' => $request->password,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pelanggan')->with('success', 'Pelanggan Berhasil Ditambahkan');
    }

    public function read(Pelanggan $id){
        return view('pelanggan.read', [
            'pelanggan' => $id,
            'pelanggans' => Pelanggan::all(),
            'title' => 'Pelanggan',
        ]);
    }

    public function edit($id)
    {
		$pelanggan = DB::table('pelanggans')->where('id',$id)->get();
		return view('pelanggan.edit',[
            'pelanggans' => $pelanggan,
            // 'tarifs' => Tarif::all(),
            'title' => 'Pelanggan'
        ]);
    }

 
    public function update(Request $request)
    {
		DB::table('pelanggans')->where('id',$request->id)->update([
            'username' => $request->username,
            'password' => $request->password,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
		]);
		
		return redirect('/pelanggan');
    }


	public function hapus($id)
	{
		DB::table('pelanggans')->where('id',$id)->delete();

		return redirect('/pelanggan');
	}
}
