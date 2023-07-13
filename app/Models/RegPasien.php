<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegPasien extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function layanan(){
        return $this->belongsTo(Layanan::class);
    }

    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }

    public function pendaftaran(){
        return $this->belongsTo(Pendaftaran::class, 'pasien_id');
    }

}
