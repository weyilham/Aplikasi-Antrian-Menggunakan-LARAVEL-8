<?php

use App\Models\Loket;
use App\Models\Antrian;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Scope;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoketController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\CetakAntrianController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegpasienController;
use App\Models\RegPasien;
use App\Http\Controllers\LayananController;
use App\Models\Dokter;

Route::get('/loket-antrian', function () {
    return view('dashboard', [
        'loket' => Loket::all()
    ]);
});

Route::get('/', [LoginController::class, 'index']);

Route::get('/plasma', function () {
    return view('plasma', [
        'loket1' => Antrian::whereRaw('day(created_at) = ' . date('d') . ' and month(created_at) = ' . date('m') . ' and year(created_at) = ' . date('Y'))
            ->where('status', 0)
            ->where('loket_id', 1)
            ->orderBy('created_at', 'asc')
            ->get(),
        'loket2' => Antrian::whereRaw('day(created_at) = ' . date('d') . ' and month(created_at) = ' . date('m') . ' and year(created_at) = ' . date('Y'))
            ->where('status', 0)
            ->where('loket_id', 2)
            ->orderBy('created_at', 'asc')
            ->get()
    ]);
});


Route::get('/dashboard/plasma-antrian',[AntrianController::class, 'plasmaAntrian'])->middleware('auth');
Route::post('/dashboard/get-plasma',[AntrianController::class, 'getPlasmaAntrian'])->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'pasien' => RegPasien::all(),
        'dokter' => Dokter::all(),
        'antrian' => Antrian::whereRaw('day(created_at) = ' . date('d') . ' and month(created_at) = ' . date('m') . ' and year(created_at) = ' . date('Y'))
        ->where('status', 0)->get()
    ]);
})->middleware('auth');

Route::resource('/dashboard/users', UserController::class)->scoped(['user' => 'username'])->middleware('isAdmin');
Route::resource('/dashboard/loket', LoketController::class)->middleware('isAdmin');
Route::resource('/dashboard/pendaftaran', PendaftaranController::class)->middleware('auth');
Route::resource('/dashboard/layanan', LayananController::class)->middleware('isAdmin');
Route::resource('/dashboard/dokter', DokterController::class)->middleware('isAdmin');



//registrasi pasien
Route::post('/dashboard/regpasien', [RegpasienController::class, 'store'])->middleware('auth');




Route::get('/dashboard/antrian', [AntrianController::class, 'index'])->middleware('auth');
Route::post('/dashboard/antrian', [AntrianController::class, 'store'])->middleware('auth');
Route::get('/dashboard/antrian/{id}/{tipe}', [AntrianController::class, 'getRowId'])->middleware('auth');
Route::get('/dashboard/antrian/{loket}', [AntrianController::class, 'getLoketId'])->middleware('auth');

Route::get('/antrian/pasien_bpjs/{id}', [CetakAntrianController::class, 'cetakBpjs']);
Route::get('/antrian/pasien_umum/{id}', [CetakAntrianController::class, 'cetakUmum']);


Route::get('/antrian/cetak_antrian_bpjs', function () {
    return view('antrian.cetak_antrian_bpjs', [
        'tiket' => Antrian::latest()->where('loket_id', 1)->where('status', 0)->get()
    ]);
});

Route::get('/antrian/cetak_antrian_umum', function () {
    return view('antrian/cetak_antrian_umum', [
        'tiket' => Antrian::latest()->where('loket_id', 2)->where('status', 0)->get()
    ]);
});

Route::get('/dashboard/laporan', [laporanController::class, 'index'])->middleware('auth');
Route::post('/dashboard/laporan/cetak', [laporanController::class, 'cetak'])->middleware('auth');


// 'tiket' => DB::table('antrians')
//             ->where('loket_id', '=', 1)
//             ->where('status', '=', 0)
//             ->get()
