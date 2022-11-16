<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            [
                'tanggal' => '2022-11-08',
                'jumlahbeli' => '200000',
                'nometer' => '2345',
                'totalkwh' => '80',
                'token' => '1234567890',
                'tarif_id' => '2',

            ],
        ];
        foreach ($transaksi as $trf){
            \App\Models\Transaksi::firstOrCreate($trf);
        }
    }
}
