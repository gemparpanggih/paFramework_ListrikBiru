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
                'kodetarif' => 'TR/-1',
                'voltase' => '450',
                'biaya' => '550',
            ],
            [
                'kodetarif' => 'TR/-2',
                'voltase' => '900',
                'biaya' => '900',
            ],
            [
                'kodetarif' => 'TR/-3',
                'voltase' => '1300',
                'biaya' => '1400',
            ],
            [
                'kodetarif' => 'TR/-4',
                'voltase' => '2200',
                'biaya' => '2200',
            ],
            [
                'kodetarif' => 'TR/-5',
                'voltase' => '5500',
                'biaya' => '2800',
            ],
            [
                'kodetarif' => 'TR/-6',
                'voltase' => '7500',
                'biaya' => '5400',
            ],
        ];
        foreach ($tarif as $trf){
            \App\Models\Tarif::firstOrCreate($trf);
        }
    }
}
