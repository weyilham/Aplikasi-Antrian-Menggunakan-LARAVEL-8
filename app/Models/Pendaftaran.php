<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function registrasi(){
        return $this->hasMany(RegPasien::class, 'pasien_id');
    }
}
