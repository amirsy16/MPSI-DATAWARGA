<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'surat'; 
    protected $fillable = ['warga_id', 'jenis_surat', 'keterangan', 'nomor_wa', 'email', 'status'];

    // Relasi ke DataWarga
    public function warga()
    {
        return $this->belongsTo(DataWarga::class, 'warga_id');
    }
}

