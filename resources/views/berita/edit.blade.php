@extends('layout.template')

<div class="container-fluid">
    <div class="row">
        @include('layout.navbar')
        <div class="ccontainer-fluid h-100 mt-5 pt-5">
            <h2 class="mt-3">Edit Berita</h2>
            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
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
                    <label for="judul" class="form-label">Judul:</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten:</label>
                    <textarea name="konten" class="form-control" required>{{ old('konten', $berita->konten) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal:</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $berita->tanggal->format('Y-m-d')) }}" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Unggah Foto (opsional):</label>
                    <input type="file" name="foto" class="form-control" accept="image/*">
                    @if($berita->foto)
                        <img src="{{ Storage::url($berita->foto) }}" alt="Foto Berita" width="100" class="mt-2">
                    @else
                        <p>Tidak ada foto saat ini.</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-warning">Update Berita</button>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
