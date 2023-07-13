<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.layanan.index', [
            'layanan' => Layanan::all()
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
        return view('dashboard.layanan.create');
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
        $data = [
            'kd_layanan' => 'required|unique:layanans',
            'nama_layanan' => 'required'
        ];

        
        $validasi = $request->validate($data);
        // dd($validasi);
        
        Layanan::create($validasi);
        return redirect('/dashboard/layanan')->with('success', 'Data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_layanan)
    {
        //
        // return "hallo";
        // dd($layanan);
        $data = Layanan::where('kd_layanan', $kd_layanan)->first();
        if(!$data){
           return redirect('/dashboard/layanan');
        };
        return view('dashboard.layanan.edit', [
            'layanan' => $data,
        ]);
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
        $data = [
            // 'kd_layanan' => 'required|unique:layanans',
            'nama_layanan' => 'required'
        ];

        if ($request->kd_layanan != $layanan->kd_layanan) {
            $data['kd_layanan'] = 'required|unique:layanans';
        }

        
        $validasi = $request->validate($data);
        // dd($validasi);
        
        Layanan::where('id', $layanan->id)->update($validasi);

        return redirect('/dashboard/layanan')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //
        Layanan::destroy($layanan->id);
        return redirect('/dashboard/layanan')->with('success', 'Data Berhasil dihapus!');
    }
}
