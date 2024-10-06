<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataWarga;
use Illuminate\Support\Facades\Hash; 

class AuthController extends Controller
{
    
    // Menampilkan form login
    public function showLoginForm()
    {
        
       // Jika sudah login dan tipe pengguna admin, arahkan ke dashboard admin
    if (session('user_type') == 'admin') {
        return redirect()->route('dashboard_admin.index');
    }
    // Jika sudah login dan tipe pengguna user, arahkan ke dashboard user
    elseif (session('user_type') == 'user') {
        return redirect()->route('dashboard.index');
    }

    // Jika belum login, tampilkan halaman login
    return view('auth.index');
    }

    // Proses login untuk admin dan warga
    public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'identifier' => 'required|string',
        'password' => 'required|string',
    ]);

    // Cek apakah login sebagai admin
    if ($request->identifier === 'admin123' && $request->password === 'admin123') {
        // Login sebagai admin
        session(['user_type' => 'admin']);
        return redirect()->route('dashboard_admin.index');
    }

    // Cek login sebagai warga
    $warga = DataWarga::where('nik', $request->identifier)->first();
    
    // Periksa apakah warga ditemukan dan password yang dimasukkan cocok
    if ($warga && Hash::check($request->password, $warga->password)) {
        Auth::guard('warga')->login($warga);
        session(['user_type' => 'user', 'warga_id' => $warga->id]); // Simpan warga_id ke dalam session
        return redirect()->route('dashboard.index')->with('success', 'Login warga berhasil');
    }
    

    // Jika gagal, kembalikan pesan error
    return back()->withErrors(['identifier' => 'Username/NIK atau password salah.']);
}

public function logout()
{
    
    session()->forget('admin'); // Hapus session admin
    session()->flush(); // Hapus semua session
    return redirect()->route('pengunjung.index')->with('success', 'Logout berhasil');
}


}

