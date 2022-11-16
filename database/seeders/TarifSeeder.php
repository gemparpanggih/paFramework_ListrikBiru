<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarif = [
            [
                'kodetarif' => 'T1',
                'voltase' => '450 VA',
                'biaya' => '550',
            ],
            [
                'kodetarif' => 'T2',
                'voltase' => '900 VA',
                'biaya' => '900',
            ],
            [
                'kodetarif' => 'T3',
                'voltase' => '1300 VA',
                'biaya' => '1400',
            ],
            [
                'kodetarif' => 'T4',
                'voltase' => '2200 VA',
                'biaya' => '2200',
            ],
        ];
        foreach ($tarif as $trf){
            \App\Models\Tarif::firstOrCreate($trf);
        }
    }
}
