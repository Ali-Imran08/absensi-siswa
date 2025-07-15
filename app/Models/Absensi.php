<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = [
        'siswa_id',
        'jadwal_id',
        'tanggal',
        'status',
        'waktu_absen',
        'terlambat'
    ];
}
