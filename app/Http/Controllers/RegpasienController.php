<?php

namespace App\Http\Controllers;

use App\Models\RegPasien;
use Illuminate\Http\Request;

class RegpasienController extends Controller
{
    //
    public function store(Request $request){

        // dd($request->post());
        $validasi = [
            'noregistrasi' => 'unique:regPasien',
            'pasien_id' => 'required',
            'no_rm' => 'required',
            'layanan_id' => 'required',
            'dokter_id' => 'required',
            'tipe_pasien' => 'required',
            'no_bpjs' => 'required',
        ];

        $data = $request->validate($validasi);
        $data['noregistrasi'] = random_int(10000000, 99999999);

        // dd($data);
        RegPasien::create($data);
        return redirect('/dashboard/pendaftaran')->with('success', 'Pasien Berhasil di daftarkan');
    }
}
