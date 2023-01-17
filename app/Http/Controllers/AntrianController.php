<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Antrian;
use \App\Models\Loket;


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
