<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function dokter(){
        return $this->hasMany(Dokter::class);
    }

    public function registrasi(){
        return $this->hasMany(RegPasien::class);
    }
}
