<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nama_instansi', 'tahun_masuk', 'tahun_selesai', 'keterangan'
    ];
    public function pendidikan()
    {
    return $this->belongsTo(Pendidikan::class, 'id');
    }
}
