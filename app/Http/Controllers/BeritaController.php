<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all(); // Mengambil semua berita
        return view('berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
        ]);
    
        // Handle upload foto
        $path = null;
        if ($request->hasFile('foto')) {
            // Simpan di direktori public storage
            $path = $request->file('foto')->store('foto_berita', 'public');
        }
    
        // Simpan data berita dengan foto dan tanggal
        Berita::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
            'foto' => $path, // Simpan path foto ke database
        ]);
    
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
        ]);
    
        $berita = Berita::findOrFail($id);
    
        // Handle upload foto
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($berita->foto) {
                Storage::disk('public')->delete($berita->foto);
            }
            // Simpan foto baru di storage public
            $path = $request->file('foto')->store('foto_berita', 'public');
            $berita->foto = $path; // Update path foto baru
        }
    
        // Update data berita
        $berita->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
        ]);
    
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus foto dari storage jika ada
        if ($berita->foto) {
            Storage::delete($berita->foto);
        }

        $berita->delete(); // Hapus data berita

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
