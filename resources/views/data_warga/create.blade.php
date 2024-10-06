@extends('layout.template')

<body>
    <div class="container-fluid">
        <div class="row">
            @include('layout.navbar')
            <div class="container-fluid h-100 mt-5 pt-5">
                <h2 class="mt-3">Tambah Data Warga</h2>
                <form action="{{ route('data_warga.store') }}" method="POST">
                    @csrf
                     <!-- Pesan Kesalahan -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                        <input type="text" name="nama_lengkap" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK:</label>
                        <input type="text" name="nik" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" class="form-select" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                        <input type="text" name="pekerjaan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="status_perkawinan" class="form-label">Status Perkawinan:</label>
                        <select name="status_perkawinan" class="form-select" required>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama:</label>
                        <select name="agama" class="form-select" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak:</label>
                        <input type="text" name="kontak" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>                    
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('data_warga.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

