<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = [
        'tanggal',
        'status',
        'waktu_absen',
        'terlambat'
    ];
}
