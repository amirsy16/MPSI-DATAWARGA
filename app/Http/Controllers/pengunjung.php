<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\DataWarga;

class pengunjung extends Controller
{
    public function index()
    {
        // Mengambil berita terbaru
        $beritas = Berita::all();
        $jumlahWarga = DataWarga::count();

        return view('pengunjung.index', compact('beritas', 'jumlahWarga'));
    }
}
