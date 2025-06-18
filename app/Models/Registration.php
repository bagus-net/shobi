<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'asal_sekolah',
        'email',
        'nomor_whatsapp',
        'lomba',
        'pas_foto_path',
        'scan_kartu_pelajar_path',
        'bukti_follow_path',
        'bukti_posting_twibbon_path',
    ];
}
