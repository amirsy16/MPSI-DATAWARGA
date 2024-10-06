@extends('layout.template')

@section('content')
<div class="container-fluid h-100 d-flex align-items-start justify-content-center mt-5 pt-5">
    <div class="bg-light p-4 rounded shadow me-3" style="max-width: 700px; width: 100%;">
        <h1 class="text-center text-primary">Selamat Datang di Website DataWarga</h1>
        <hr class="my-4">
        
        <p class="text-justify text-secondary">
            Website <strong>DataWarga</strong> adalah sebuah platform digital yang dirancang oleh Kelompok Mahasiswa 
            Sistem Informasi Universitas Jambi. Website ini dibuat sebagai bagian dari proyek kolaboratif untuk memenuhi 
            salah satu tugas mata kuliah <em>Manajemen Perubahan dan Proyek Sistem Informasi</em>. Tujuan utama dari pengembangan 
            website ini adalah untuk menyediakan sebuah solusi praktis dalam pengelolaan data warga pada tingkat RT/RW 
            yang dapat diakses oleh perangkat desa maupun masyarakat umum.
        </p>

        <p class="text-justify text-secondary">
            Melalui website DataWarga, perangkat RT/RW dapat lebih mudah melakukan pendataan, pengelolaan, dan pembaruan 
            informasi terkait warga yang berada dalam wilayah mereka. Hal ini mencakup informasi dasar warga, status 
            kependudukan, serta administrasi surat yang mungkin dibutuhkan oleh warga. Fitur-fitur seperti permintaan surat 
            domisili dan surat permohonan lainnya dapat dilakukan secara daring sehingga memudahkan proses birokrasi dan 
            mempercepat pelayanan masyarakat.
        </p>

        <p class="text-justify text-secondary">
            Website ini merupakan bukti nyata dari penerapan konsep-konsep yang telah dipelajari selama perkuliahan, 
            termasuk analisis kebutuhan sistem, perancangan antarmuka pengguna, dan manajemen proyek teknologi informasi. 
            Dengan adanya platform ini, diharapkan perangkat RT/RW dan warga bisa memanfaatkan teknologi secara maksimal 
            untuk mendukung transparansi dan efisiensi layanan publik di tingkat lokal.
        </p>

        <p class="text-justify text-secondary">
            Kami mengucapkan terima kasih kepada seluruh dosen pembimbing serta pihak-pihak yang telah mendukung dalam 
            proses pengembangan website ini. Kritik dan saran dari berbagai pihak sangat diharapkan untuk terus memperbaiki 
            dan mengembangkan website DataWarga ke arah yang lebih baik lagi di masa mendatang.
        </p>

        <p class="text-center text-secondary font-italic mt-4">
            Kelompok Mahasiswa Sistem Informasi <br>
            Universitas Jambi
        </p>
    </div>

    <!-- Kotak Anggota Kelompok -->
    <div class="bg-light p-4 rounded shadow" style="max-width: 300px; width: 100%;">
        <h4 class="text-primary">Anggota Kelompok:</h4>
        <div class="mb-3">
            <div class="border p-2 text-center">
                <img src="path/to/profile1.jpg" alt="Amir Syofian" class="img-fluid rounded-circle mb-2" style="width: 80px; height: 80px;">
                <p><strong>Amir Syofian</strong><br>NIM: F1E122212</p>
            </div>
        </div>
        <div class="mb-3">
            <div class="border p-2 text-center">
                <img src="path/to/profile2.jpg" alt="Rahma Yana Saputri" class="img-fluid rounded-circle mb-2" style="width: 80px; height: 80px;">
                <p><strong>Rahma Yana Saputri</strong><br>NIM: F1E122106</p>
            </div>
        </div>
        <div class="mb-3">
            <div class="border p-2 text-center">
                <img src="path/to/profile3.jpg" alt="Ofel Idhan Wahyu" class="img-fluid rounded-circle mb-2" style="width: 80px; height: 80px;">
                <p><strong>Ofel Idhan Wahyu</strong><br>NIM: F1E122100</p>
            </div>
        </div>
    </div>
</div>
@endsection
