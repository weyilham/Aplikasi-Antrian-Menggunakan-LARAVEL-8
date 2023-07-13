<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Layanan;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.dokter.index', [
            'dokter' => Dokter::all(),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.dokter.create', [
            'layanan' => Layanan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->post());
        $data = [
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'layanan_id' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required'
        ];

        $validate = $request->validate($data);

        Dokter::create($validate);
        return redirect('/dashboard/dokter')->with('success', 'Data dokter berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
        return view('/dashboard/dokter/show', [
            'dokter' => $dokter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
    {
        //
        $spesialis = [
                "Spesialis Penyakit Dalam",
                "Spesialis Obstetri dan Ginekologi",
                "Spesialis Anak",
                "Spesialis Bedah",
                "Spesialis Radiologi",
                "Spesialis Anestesi",
                "Spesialis Gigi",
                "Spesialis Anestesi",
                "Spesialis Anestesi",
        ];
        return view('dashboard.dokter.edit', [
            'dokter' => $dokter,
            'layanan' => Layanan::all(),
            'spesialis' => $spesialis
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        //
        $data = [
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'layanan_id' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required'
        ];

        $validate = $request->validate(($data));

        Dokter::where('id', $dokter->id)->update($validate);

        return redirect('/dashboard/dokter')->with('success', 'Data berhasil di edit');


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        //

        Dokter::destroy($dokter->id);
        return redirect('/dashboard/dokter')->with('success', 'Data Berhasil dihapus!');

    }
}
