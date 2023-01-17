<?php

namespace App\Models;

use App\Models\Antrian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loket extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function antrian()
    {
        return $this->hasMany(Antrian::class);
    }
}
