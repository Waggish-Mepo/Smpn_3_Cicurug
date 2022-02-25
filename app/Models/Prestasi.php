<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KetPrestasi;


class Prestasi extends Model
{
    protected $guarded = ['id'];


    use HasFactory;

    public function ketPrestasi()
    {
        return $this->belongsTo(KetPrestasi::class, 'ketPrestasi_id');
    }
}
