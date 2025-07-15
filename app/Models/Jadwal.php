<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'kelas_id',
        'guru_id',
        'hari',
        'jam_masuk'
    ];
}