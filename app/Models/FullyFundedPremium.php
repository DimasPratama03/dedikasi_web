<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FullyFundedPremium extends Model
{
    use HasFactory;
    protected $table = 'fully_funded_premium'; 
    protected $fillable = [
        'email', 'nama_lengkap', 'domisili', 'instansi', 'nomor_whatsapp', 'username_instagram',
        'alasan_mengikuti', 'divisi', 'alasan_divisi', 'riwayat_penyakit', 'kondisi_lapangan'
    ];
}
