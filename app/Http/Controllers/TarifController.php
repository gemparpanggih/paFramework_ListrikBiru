<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Tarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarifController extends Controller
{
    public function index(){
        return view('tarif.index', [
            'tarifs' => Tarif::all(),
            'title' => 'Tarif'
        ]);
    }
    
    public function create(){
        return view('tarif.create', [
            'title' => 'Tarif'
        ]);
    }

    public function store(Request $request){
        DB::table('tarifs')->insert([
            'kodetarif' => $request->kodetarif,
            'voltase' => $request->voltase,
            'biaya' => $request->biaya,
        ]);

        return redirect('/tarif')->with('success', 'Tarif Berhasil Ditambahkan');
    }

    public function read(Tarif $id){
        return view('tarif.read', [
            'tarif' => $id,
            'tarifs' => Tarif::all(),
            'title' => 'Tarif',
        ]);
    }

    public function edit($id)
    {
		$tarif = DB::table('tarifs')->where('id',$id)->get();
		return view('tarif.edit',[
            'tarifs' => $tarif,
            // 'tarifs' => Tarif::all(),
            'title' => 'Tarif'
        ]);
    }

 
    public function update(Request $request)
    {
		DB::table('tarifs')->where('id',$request->id)->update([
            'kodetarif' => $request->kodetarif,
            'voltase' => $request->voltase,
            'biaya' => $request->biaya,
		]);
		
		return redirect('/tarif');
    }


	public function hapus($id)
	{
		DB::table('tarifs')->where('id',$id)->delete();

		return redirect('/tarif');
	}
}
