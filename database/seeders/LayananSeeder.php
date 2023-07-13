<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Layanan::create([
            'kd_layanan' => 'kia',
            'nama_layanan' => 'Poli KIA',
        ]);
        Layanan::create([
            'kd_layanan' => 'gigi',
            'nama_layanan' => 'Poli Gigi',
        ]);

        Layanan::create([
            'kd_layanan' => 'obgin',
            'nama_layanan' => 'Poli Obgin',
        ]);
       
        Layanan::create([
            'kd_layanan' => 'lab',
            'nama_layanan' => 'Laboratorium',
        ]);
        
    }
}
