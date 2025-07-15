<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    protected $fillable = [
        'siswa_id',
        'keterangan',
        'bukti_file',
        'status'
    ];
}
