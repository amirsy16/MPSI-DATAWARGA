@extends('layout.template')

<!-- Body Halaman Berita -->
<body class="vh-100">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Sidebar Navbar -->
            @include('layout.navbar')

            <!-- Konten Utama -->
            <div class="container-fluid h-100 mt-5 pt-5"> <!-- Mengatur kolom agar mengambil ruang penuh -->
                <div class="h-100 mt-5 pt-3"> <!-- Menjaga jarak dengan navbar -->
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="card h-100"> <!-- Mengatur card agar memenuhi tinggi kolom -->
                                <div class="card-body d-flex flex-column"> <!-- Mengatur agar konten di dalam card terdistribusi secara vertikal -->
                                    <!-- Judul Berita -->
                                    <h2 class="text-center">{{ $berita->judul }}</h2>
                                    
                                    <!-- Tanggal Berita -->
                                    <p class="text-center text-muted">{{ $berita->tanggal->format('d-m-Y') }}</p>
                                    
                                    <!-- Gambar Berita -->
                                    <div class="text-center mb-4"> <!-- Menambahkan margin bawah untuk jarak -->
                                        @if($berita->foto)
                                            <img src="{{ $berita->foto }}" alt="Foto Berita" class="img-fluid" style="max-width: 750px; height: auto;">
                                        @else
                                            <p>Foto tidak tersedia</p>
                                        @endif
                                    </div>
                                    
                                    <hr>

                                    <!-- Konten Berita -->
                                    <p class="text-justify flex-grow-1">{{ $berita->konten }}</p> <!-- Menambahkan flex-grow agar konten mengisi ruang yang tersisa -->

                                    <div class="text-center mt-4">
                                        <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
