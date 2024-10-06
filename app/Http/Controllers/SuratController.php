<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class SuratController extends Controller
{
    // Menampilkan daftar surat (hanya admin yang bisa melihat semua surat)
    public function index()
    {
        // Cek tipe user dari session
        if (session('user_type') == 'admin') {
            // Jika admin, tampilkan semua surat
            $surat = Surat::with('warga')->get();
        } else if (session('user_type') == 'user') {
            // Jika user (warga), ambil surat yang terkait dengan warga yang login
            $wargaId = session('warga_id'); // Mengambil warga_id dari session
            $surat = Surat::where('warga_id', $wargaId)->get();
        } else {
            return redirect()->route('login')->withErrors('Anda tidak memiliki akses.');
        }

        return view('surat.index', compact('surat'));
    }

    // Form untuk warga meminta surat
    public function create()
    {
        if (session('user_type') != 'user') {
            return redirect()->route('login')->withErrors('Hanya warga yang bisa meminta surat.');
        }

        return view('surat.create');
    }

    // Menyimpan permintaan surat dari warga
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'jenis_surat' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'nomor_wa' => 'required|string|max:15', // Validasi untuk nomor WA
            'email' => 'nullable|email|max:255',   // Validasi untuk email opsional
        ]);

        // Pastikan bahwa yang login adalah warga
        if (session('user_type') == 'user') {
            // Buat surat baru untuk warga yang login
            Surat::create([
                'warga_id' => session('warga_id'), // Ambil warga_id dari session
                'jenis_surat' => $request->jenis_surat,
                'keterangan' => $request->keterangan,
                'nomor_wa' => $request->nomor_wa, // Simpan nomor WA
                'email' => $request->email,       // Simpan email jika ada
            ]);

            return redirect()->route('surat.index')->with('success', 'Permintaan surat berhasil diajukan');
        } else {
            return redirect()->route('login')->withErrors('Anda tidak memiliki akses.');
        }
    }

    // Admin mengubah status surat
    public function updateStatus(Request $request, $id)
    {
        if (session('user_type') != 'admin') {
            return redirect()->route('login')->withErrors('Hanya admin yang bisa mengubah status.');
        }

        $surat = Surat::findOrFail($id);

        // Validasi dan update status surat
        $request->validate(['status' => 'required|in:disetujui,ditolak']);
        $surat->update(['status' => $request->status]);

        return redirect()->route('surat.index')->with('success', 'Status surat berhasil diubah');
    }

    public function editStatus($id)
    {
        // Ambil surat berdasarkan ID
        $surat = Surat::findOrFail($id);
        
        // Tampilkan form edit status surat
        return view('surat.edit_status', compact('surat'));
    }
}
