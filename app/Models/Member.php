<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{


    use HasFactory;

    protected $table = 'members';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'kd_member',
        'nama',
        'tgl_join',
        'no_hp1',
        'no_hp2',
        'catatan',
        'jenis_member',
        'identitas',
        'ktp_photo',
        'facebook_photo',
        'instagram_photo',
    ];

    protected $casts = [
        'tgl_join' => 'datetime:d-m-Y', // Format tanggal jika diperlukan
    ];
}
