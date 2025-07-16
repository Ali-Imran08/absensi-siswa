<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'kelas_id',
        'nama',
        'nis',
        'user_id'
    ];
}
