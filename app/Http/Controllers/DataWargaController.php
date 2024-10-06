<?php

namespace App\Http\Controllers;

use App\Models\DataWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataWargaController extends Controller
{
    // Menampilkan semua data warga
    public function index()
    {
        $dataWarga = DataWarga::all(); // Mengambil semua data warga
        return view('data_warga.index', compact('dataWarga'));
    }
    

    // Menampilkan form untuk menambah data warga baru
    public function create()
    {
        return view('data_warga.create');
    }

    // Menyimpan data warga baru ke database
   // Menyimpan data warga baru ke database
   public function store(Request $request)
   {
       // Validasi input
       $request->validate([
           'nama_lengkap' => 'required|string|max:100',
           'nik' => 'required|string|size:16|unique:data_warga,nik',
           'tanggal_lahir' => 'required|date',
           'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
           'pekerjaan' => 'required|string|max:50',
           'status_perkawinan' => 'required|in:Belum Menikah,Menikah,Cerai',
           'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu',
           'kontak' => 'required|string|max:15',
           'password' => 'required|string|min:8', // Ubah 'nullable' menjadi 'required' untuk memastikan password diisi
       ]);
   
       // Hash password
       $request->merge([
           'password' => Hash::make($request->password),
       ]);
   
       // Simpan data ke database
       DataWarga::create($request->all());
   
       // Redirect dengan pesan sukses ke halaman data_warga.index
       return redirect()->route('data_warga.index')->with('success', 'Data warga berhasil ditambahkan');
   }


    // Menampilkan detail data warga
    public function show($id)
    {
        $dataWarga = DataWarga::findOrFail($id); // Ambil data warga berdasarkan ID
        return view('data_warga.show', compact('dataWarga'));
    }

    // Menampilkan form edit data warga
    public function edit($id)
    {
        $dataWarga = DataWarga::findOrFail($id); // Ambil data warga yang ingin diedit
        return view('data_warga.edit', compact('dataWarga'));
    }

    // Mengupdate data warga yang sudah ada di database
    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'nama_lengkap' => 'required|string|max:100',
        'nik' => 'required|string|size:16|unique:data_warga,nik,'.$id, // Cek keunikan kecuali untuk ID yang sedang di-update
        'tanggal_lahir' => 'required|date',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        'pekerjaan' => 'required|string|max:50',
        'status_perkawinan' => 'required|in:Belum Menikah,Menikah,Cerai',
        'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu',
        'kontak' => 'required|string|max:15',
        'password' => 'nullable|string|min:8', // Password bersifat opsional saat update
    ]);

    // Temukan data warga berdasarkan ID
    $dataWarga = DataWarga::findOrFail($id);

    // Jika password diisi, hash dan update password
    $dataToUpdate = $request->all();
    if ($request->filled('password')) {
        $dataToUpdate['password'] = Hash::make($request->password); // Hash password
    } else {
        // Jika password tidak diisi, jangan ubah password
        unset($dataToUpdate['password']);
    }

    // Update data warga
    $dataWarga->update($dataToUpdate);

    // Redirect dengan pesan sukses
    return redirect()->route('data_warga.index')->with('success', 'Data warga berhasil diupdate');
}

    // Menghapus data warga dari database
    public function destroy($id)
    {
        $dataWarga = DataWarga::findOrFail($id); // Cari data warga
        $dataWarga->delete(); // Hapus data

        // Redirect dengan pesan sukses
        return redirect()->route('data_warga.index')->with('success', 'Data warga berhasil dihapus');
    }
}
