@extends('layout.template')

@section('content')
    <div class="container-fluid h-100 mt-5 pt-5">
        <h1>Edit Status Surat</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        

        <a href="{{ route('surat.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Surat</a>

        <form action="{{ route('surat.updateStatus', $surat->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="status">Status Surat</label>
                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="disetujui" {{ $surat->status == 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                    <option value="ditolak" {{ $surat->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
                @error('status')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
