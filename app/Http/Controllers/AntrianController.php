<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Antrian;
use App\Models\Layanan;
use \App\Models\Loket;
use App\Models\RegPasien;

class AntrianController extends Controller
{
    //
    public function index(Request $request)
    {

        // $antrian = Antrian::all();
        $antrian = '';

        if ($request->id_loket) {
            # code...
            $antrian = Antrian::where('loket_id', $request->id_loket)
                // ->where('day(created_at)', date('d'))
                ->whereRaw('day(created_at) = ' . date('d') . ' and month(created_at) = ' . date('m') . ' and year(created_at) = ' . date('Y'))
                ->orderBy('created_at', 'asc')
                ->get();
        }
        return view('dashboard.antrian.index', [
            'antrian' => $antrian,
            'loket' => Loket::all()
        ]);
    }

    public function plasmaAntrian(){
        return view('dashboard.antrian.plasma_antrian', [
            'poli' => Layanan::all()
        ]);
    }

    public function getPlasmaAntrian(Request $request){

        
        // dd($request->post('layanan_id')); 
        
           $query = RegPasien::whereRaw('day(created_at) = ' . date('d') . ' and month(created_at) = ' . date('m') . ' and year(created_at) = ' . date('Y'))
           ->where('layanan_id', $request->post('layanan_id'))
           ->get();
        
           return view('dashboard.antrian.get_antrian_poli', [
            'data' => $query,
            'layanan' => Layanan::where('id', $request->post('layanan_id'))->get()
           ]);

        

    
    }

    public function getRowId($id, $tipe)
    {

        if ($tipe == 'previous') {
            $data = ['status' => 0];
        } elseif ($tipe == 'next') {
            $data = ['status' => 1];
        }

        Antrian::where('id', $id)->update($data);
        return json_encode(Antrian::Where('id', $id)->first());
    }

    public function getLoketId($loketId)
    {
        return view('dashboard.antrian.get_antrian', [
            'antrian' => Antrian::where('loket_id', $loketId)->orderBy('created_at', 'asc')->get(),
        ]);
    }
}
