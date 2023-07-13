<?php

namespace Database\Seeders;

use App\Models\Antrian;
use App\Models\User;
use App\Models\Loket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ilham Maulana',
            'email' => 'ilham@gmail.com',
            'username' => 'ilham',
            'password' => bcrypt('123'),
            'is_admin' => 1
        ]);

        Loket::create([
            'nama_loket' => 'Bpjs Kesehatan',
            'kode' => 'P',
            'deskripsi' => 'Pasien Bpjs'
        ]);

        Loket::create([
            'nama_loket' => 'Umum',
            'kode' => 'U',
            'deskripsi' => 'Pasien Umum'
        ]);

        Antrian::create([
            'loket_id' => 1,
            'no_antrian' => 'P01'
        ]);
        Antrian::create([
            'loket_id' => 1,
            'no_antrian' => 'P02'
        ]);

        Antrian::create([
            'loket_id' => 2,
            'no_antrian' => 'U01'
        ]);
        Antrian::create([
            'loket_id' => 2,
            'no_antrian' => 'U02'
        ]);

        User::factory(5)->create();
        $this->call(LayananSeeder::class);
        $this->call(DokterSeeder::class);

    }
}
