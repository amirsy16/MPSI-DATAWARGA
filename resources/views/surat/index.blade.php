@extends('layout.template')

@section('content')
    <div class="container-fluid h-100 mt-5 pt-5">
        <h1>Daftar Surat</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Notifikasi Hijau untuk Surat yang Disetujui -->
        @foreach ($surat as $s)
            @if($s->status == 'disetujui' && session('user_type') == 'user')
                <div class="alert alert-success">
                    Suratmu telah disetujui. Mohon menunggu, kami akan mengirimkan suratmu melalui WhatsApp ke nomor Anda.
                </div>
            @endif
        @endforeach

        @if (session('user_type') == 'admin')
            <a href="{{ route('dashboard_admin.index') }}" class="btn btn-secondary mb-3">Kembali ke Dashboard Admin</a>
        @else
            <a href="{{ route('dashboard.index') }}" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>
            <a href="{{ route('surat.create') }}" class="btn btn-primary mb-3">Ajukan Surat</a> <!-- Tombol Request Surat -->
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jenis Surat</th>
                    <th>Keterangan</th>
                    <th>Kontak WhatsApp</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Warga</th>
                    @if (session('user_type') == 'admin')
                        <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($surat as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->jenis_surat }}</td>
                        <td>{{ $s->keterangan }}</td>
                        <td>{{ $s->nomor_wa }}</td>
                        <td>{{ $s->email }}</td>
                        <td>{{ $s->status }}</td>
                        <td>{{ $s->warga->nama_lengkap }}</td>
                        @if (session('user_type') == 'admin')
                            <td>
                                <a href="{{ route('surat.edit_status', $s->id) }}" class="btn btn-primary">Edit Status</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

       <!-- Penjelasan Sistem Surat -->
<div class="mt-4 p-4 bg-light border rounded">
    <h2 class="text-center text-primary">Sistem Pengajuan Surat</h2>
    <p class="text-justify text-secondary">
        Warga dapat mengajukan permohonan surat melalui website ini dengan memilih jenis surat yang diinginkan 
        dan melengkapi keterangan tambahan. Setelah pengajuan, admin akan memeriksa jenis surat 
        serta deskripsi yang diajukan. Berdasarkan pengecekan tersebut, admin akan menentukan apakah surat tersebut 
        disetujui atau ditolak.
    </p>
    <p class="text-justify text-secondary">
        Jika surat disetujui, status surat akan berubah menjadi "Disetujui" dan warga akan diberitahu melalui 
        notifikasi di halaman surat. Setelah itu, admin atau pihak RT akan mengirimkan salinan surat tersebut 
        langsung melalui nomor WhatsApp atau email yang telah didaftarkan oleh warga.
    </p>
</div>

    </div>
@endsection
