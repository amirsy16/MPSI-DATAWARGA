@extends('layout.template')

@section('content')
    <div class="container-fluid h-100 mt-5 pt-5">
        <h1>Ajukan Surat Baru</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('surat.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Surat</a>

        <form action="{{ route('surat.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="jenis_surat">Jenis Surat</label>
                <select name="jenis_surat" id="jenis_surat" class="form-control @error('jenis_surat') is-invalid @enderror">
                    <option value="">Pilih Jenis Surat</option>
                    <option value="Surat Keterangan Domisili" {{ old('jenis_surat') == 'Surat Keterangan Domisili' ? 'selected' : '' }}>Surat Keterangan Domisili</option>
                    <option value="Surat Permohonan" {{ old('jenis_surat') == 'Surat Permohonan' ? 'selected' : '' }}>Surat Permohonan</option>
                </select>
                @error('jenis_surat')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan (opsional)</label>
                <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan') }}</textarea>
                @error('keterangan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nomor_wa">Nomor WhatsApp</label>
                <input type="text" name="nomor_wa" id="nomor_wa" class="form-control @error('nomor_wa') is-invalid @enderror" value="{{ old('nomor_wa') }}">
                @error('nomor_wa')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email (opsional)</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Ajukan Surat</button>
        </form>
    </div>
@endsection
