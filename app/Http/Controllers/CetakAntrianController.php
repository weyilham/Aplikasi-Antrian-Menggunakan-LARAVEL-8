<?php

namespace App\Http\Controllers;

use App\Models\Antrian;

class CetakAntrianController extends Controller
{
    public function cetakBpjs($id)
    {

        $antrianNow = Antrian::whereRaw('day(created_at) = ' . date('d') . ' and month(created_at) = ' . date('m') . ' and year(created_at) = ' . date('Y'))
            ->where('loket_id', $id)
            ->orderBy('created_at', 'asc')
            ->get();


        if (count($antrianNow) > 0) {
            //jika antrian di tanggal sekarang datanya lebih dari 0
            //maka lanjutkan antrian sesuai nomber antrian
            //jika tidak ada maka mulai dari 1

            $no_antrian = count($antrianNow);
            // dd($no_antrian);
            $kode = 'P';
            if (!$no_antrian == 0) {
                $no_antrian = $no_antrian + 1;
            }
            if ($no_antrian < 10) {
                $kode = 'P0';
            } else {
                $kode = 'P';
            }
        } else {
            $no_antrian = 0;
            $kode = 'P';
            if ($no_antrian == 0) {
                $no_antrian = $no_antrian + 1;
            }
            if ($no_antrian < 10) {
                $kode = 'P0';
            } else {
                $kode = 'P';
            }
        }

        $data = [
            'loket_id' => $id,
            'no_antrian' => $kode . $no_antrian,
        ];

        // dd($data);

        Antrian::create($data);
        return redirect('/antrian/cetak_antrian_bpjs');
    }

    public function cetakUmum($id)
    {

        $antrianNow = Antrian::whereRaw('day(created_at) = ' . date('d') . ' and month(created_at) = ' . date('m') . ' and year(created_at) = ' . date('Y'))
            ->where('loket_id', $id)
            ->orderBy('created_at', 'asc')
            ->get();
        // dd($antrianNow);


        if (count($antrianNow) > 0) {
            //jika antrian di tanggal sekarang datanya lebih dari 0
            //maka lanjutkan antrian sesuai nomber antrian
            //jika tidak ada maka mulai dari 1

            $no_antrian = count($antrianNow);
            // dd($no_antrian);
            $kode = 'U';
            if (!$no_antrian == 0) {
                $no_antrian = $no_antrian + 1;
            }
            if ($no_antrian < 10) {
                $kode = 'U0';
            } else {
                $kode = 'U';
            }
        } else {
            $no_antrian = 0;
            $kode = 'U';
            if ($no_antrian == 0) {
                $no_antrian = $no_antrian + 1;
            }
            if ($no_antrian < 10) {
                $kode = 'U0';
            } else {
                $kode = 'U';
            }
        }

        $data = [
            'loket_id' => $id,
            'no_antrian' => $kode . $no_antrian,
        ];

        // dd($data);

        Antrian::create($data);
        return redirect('/antrian/cetak_antrian_umum');
    }
}
