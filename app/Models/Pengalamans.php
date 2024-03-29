<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalamans extends Model
{
    use HasFactory;
    
    protected $fillable = [ 
        'pengalaman', 'tahun', 'keterangan'
    ];
    public function pengalaman()
    {
    return $this->belongsTo(Pengalamans::class, 'id');
    }
}
