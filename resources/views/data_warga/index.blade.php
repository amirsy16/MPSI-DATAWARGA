@extends('layout.template')

<body>
    <div class="container-fluid">
        <div class="row">
             @include('layout.navbar')
            <div class="container-fluid h-100 mt-5 pt-5">
                <h2 class="mt-3">Data Warga</h2>
                <p>Selamat datang di website RT 04 Lorong Kemajuan, Mendalo</p>
                
                <!-- Tombol Tambah Data Warga -->
                <div class="mb-3">
                    <a href="{{ route('data_warga.create') }}" class="btn btn-primary">Tambah Data Warga</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Pekerjaan</th>
                            <th>Status Perkawinan</th>
                            <th>Agama</th>
                            <th>Kontak</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataWarga ?? [] as $warga)
                            <tr>
                                <td>{{ $warga->nama_lengkap }}</td>
                                <td>{{ $warga->nik }}</td>
                                <td>{{ $warga->tanggal_lahir }}</td>
                                <td>{{ $warga->jenis_kelamin }}</td>
                                <td>{{ $warga->pekerjaan }}</td>
                                <td>{{ $warga->status_perkawinan }}</td>
                                <td>{{ $warga->agama }}</td>
                                <td>{{ $warga->kontak }}</td>
                                <td>{{ $warga->password }}</td>
                                <td>
                                    <a href="{{ route('data_warga.edit', $warga->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('data_warga.destroy', $warga->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


