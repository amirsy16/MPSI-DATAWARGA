<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class DataWarga extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable; // Gunakan trait Authenticatable dan HasFactory

    protected $table = 'data_warga';

    // Jika timestamps tidak digunakan
    public $timestamps = false;

    protected $fillable = [
        'nama_lengkap', 
        'nik', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'pekerjaan', 
        'status_perkawinan', 
        'agama', 
        'kontak', 
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    // Menggunakan NIK sebagai identifier (pastikan NIK adalah unik)
    public function getAuthIdentifierName()
    {
        return 'nik'; // Laravel akan mencari NIK untuk identifikasi
    }

    public function getAuthIdentifier()
    {
        return $this->nik; // Kembalikan NIK sebagai identifier
    }

    public function getAuthPassword()
    {
        return $this->password; // Kembalikan password untuk autentikasi
    }

    public function surats()
    {
        return $this->hasMany(Surat::class);
    }
}
