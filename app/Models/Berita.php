<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'Berita';

    // Jika menggunakan timestamps, tidak perlu mendefinisikan created_at dan updated_at
    protected $fillable = [
        'judul', 'konten', 'foto', 'tanggal'

        
    ];
    protected $casts = [
        'tanggal' => 'datetime', ];
}
