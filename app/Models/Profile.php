<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $fillable = [ 
        'nama_lengkap', 'birthday', 'phone', 'email', 'foto', 'keterangan'
    ];
    public function profile()
    {
    return $this->belongsTo(Profile::class, 'id');
    }
}
