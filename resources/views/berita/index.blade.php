@extends('layout.template')

<div class="container-fluid">
    <div class="row">
        @include('layout.navbar')
        <!-- Bagian konten setelah navbar -->
        <div class="container-fluid h-100 mt-5 pt-5"> <!-- Menyesuaikan lebar kolom -->
            <h2 class="mt-3">Daftar Berita</h2>
            <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Tanggal</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beritas as $berita)
                        <tr>
                            <td>{{ $berita->judul }}</td>
                            <td>{{ Str::limit($berita->konten, 100) }}</td>
                            <td>{{ $berita->tanggal->format('d-m-Y') }}</td> <!-- Menampilkan tanggal -->
                            <td>
                                @if($berita->foto)
                                   <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto Berita" class="img-fluid" style="max-width: 100px; height: auto;">
                                @else
                                    <p>Foto tidak tersedia</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display:inline;">
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
