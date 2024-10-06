<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\DataWarga;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil berita terbaru
        $beritas = Berita::all();
        $jumlahWarga = DataWarga::count();

        return view('dashboard.index', compact('beritas', 'jumlahWarga'));
    }
}
