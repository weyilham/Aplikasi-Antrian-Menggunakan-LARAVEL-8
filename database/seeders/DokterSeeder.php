<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$table->string('nama_dokter');
        // $table->string('spesialis');
        // $table->foreignId('layanan_id');
        // $table->string('tgl_lahir');
        // $table->string('no_hp');
        // $table->string('alamat');
        // $table->timestamps();
        Dokter::create([
            'nama_dokter' => 'Argo Pribadi, dr, Sp.A',
            'spesialis' => 'Ibu dan Anak',
            'layanan_id' =>1,
            'tgl_lahir' => '1988-05-22',
            'no_hp' => '087771525333',
            'alamat' => 'Jl. Rumah Sakit Umum No.1, Kotabaru, Kec. Serang, Kota Serang, Banten 42112'
        ]);

        Dokter::create([
            'nama_dokter' => 'Eris Sejahtera, drg',
            'spesialis' => 'Gigi',
            'layanan_id' => 2,
            'tgl_lahir' => '1981-07-12',
            'no_hp' => '087771525323',
            'alamat' => 'Jl. sochari, Kota Serang, Banten 42112'
        ]);

        Dokter::create([
            'nama_dokter' => 'M. Erwin Jaya Sanjaya, SpOG',
            'spesialis' => 'Kehamilan',
            'layanan_id' => 3,
            'tgl_lahir' => '1970-05-22',
            'no_hp' => '0877715211111',
            'alamat' => 'Jl. Rumah Sakit Umum No.1, Kotabaru, Kec. Serang, Kota Serang, Banten 42112'
        ]);
    }
}
