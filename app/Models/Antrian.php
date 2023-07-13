<?php

namespace App\Models;

use App\Models\Loket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Antrian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function loket()
    {
        return $this->belongsTo(Loket::class);
    }

    
}
