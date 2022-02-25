<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prestasi;



class KetPrestasi extends Model
{
    use HasFactory;

    public function  prestasi()
    {
        return $this->belongsTo(Prestasi::class);
    }
}
