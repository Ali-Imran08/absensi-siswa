<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    protected $fillable = [
        'user_id',
        'siswa_id',
        'keterangan',
        'bukti_file',
        'siswa_id',
        'status'
    ];
}
