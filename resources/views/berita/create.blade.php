@extends('layout.template')

@section('content')
<div class="container">
    <h2 class="mt-3">Tambah Berita</h2>
    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea class="form-control" name="konten" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Unggah Foto</label>
            <input type="file" class="form-control" name="foto" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
