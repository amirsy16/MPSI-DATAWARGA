@extends('layout.template')

<body>
    <div class="container-fluid">
        <div class="row">
            @include('layout.navbar')
            <div class="col-md-9">
                <h2 class="mt-3">Edit Data Warga</h2>

                <form action="{{ route('data_warga.update', $dataWarga->id) }}" method="POST">
                    @csrf
                    @method('PUT')

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
                        <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $dataWarga->nama_lengkap) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK:</label>
                        <input type="text" name="nik" class="form-control" value="{{ old('nik', $dataWarga->nik) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $dataWarga->tanggal_lahir) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" class="form-select" required>
                            <option value="L" {{ $dataWarga->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $dataWarga->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                        <input type="text" name="pekerjaan" class="form-control" value="{{ old('pekerjaan', $dataWarga->pekerjaan) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="status_perkawinan" class="form-label">Status Perkawinan:</label>
                        <select name="status_perkawinan" class="form-select" required>
                            <option value="Belum Menikah" {{ $dataWarga->status_perkawinan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Menikah" {{ $dataWarga->status_perkawinan == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                            <option value="Cerai" {{ $dataWarga->status_perkawinan == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama:</label>
                        <select name="agama" class="form-select" required>
                            <option value="Islam" {{ $dataWarga->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $dataWarga->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $dataWarga->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $dataWarga->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ $dataWarga->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghucu" {{ $dataWarga->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak:</label>
                        <input type="text" name="kontak" class="form-control" value="{{ old('kontak', $dataWarga->kontak) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password (Kosongkan jika tidak ingin mengubah)</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    

                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('data_warga.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
