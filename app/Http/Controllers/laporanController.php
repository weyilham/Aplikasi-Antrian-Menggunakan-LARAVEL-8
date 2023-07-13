<?php

namespace App\Http\Controllers;

use App\Models\RegPasien;
use Illuminate\Http\Request;
use App\Models\Layanan;

class laporanController extends Controller
{
    //
    public function index(){
        return view('dashboard.laporan.index', [
            'bulan' => [
               "Januari",
               "Februari",
               "Maret","April",
               "Mei",
               "Juni",
               "Juli",
               "Agustus",
               "September",
               "Oktober",
               "November",
               "Desember"
            ],
            'layanan' => Layanan::all(),                                                                                                
        ]);
    } 


    public function cetak(Request $request){

        $bulan = $request->post('bulan');
        $layanan = $request->post('layanan');

        $belas = ($bulan >= 10 ? 1 : 0);
        
        // dd($belas);                  
        $query = RegPasien::whereRaw('month(created_at) = ' . $belas . $bulan)->where('layanan_id', $layanan)->get();
        return view('dashboard.laporan.cetak-laporan', [
            'bulan' => $query,
            
        ]);
        
                                                                                                                                                                                                                                

    }
}
