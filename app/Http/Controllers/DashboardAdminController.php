<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\DataWarga;
use App\Models\Surat;

class DashboardAdminController extends Controller
{
    public function index()
    {
        // Mengambil semua berita
        $beritas = Berita::all();
        $jumlahWarga = dataWarga::count(); 
        $surat = Surat::count();

        return view('dashboard_admin.index', compact('beritas', 'jumlahWarga', 'surat')); // Sesuaikan dengan nama view Anda
    }
}
