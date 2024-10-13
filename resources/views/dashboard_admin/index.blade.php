@extends('layout.template')

<!-- Body Dashboard Admin -->
<body class="vh-100">
     <div class="container-fluid h-100 mt-5 pt-5"> <!-- Menambahkan padding-top -->
        <div class="row h-100">
            <!-- Konten Dashboard -->
            <div class="col-md-12">
                <!-- Bagian Ucapan Selamat Datang -->
                <div class="mt-3 text-center" style="background-color: #dff0d8; padding: 10px; border-radius: 5px;">
                    <h2>Dashboard Admin RT 04: Pusat Informasi dan Layanan</h2>
                    <p><i>Temukan berita terbaru layanan online di satu tempat.</i></p>
                </div>
                <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel" style="margin-top: 20px;">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                          <img src="{{ asset('img/foto1.jpg') }}" class="d-block w-100" alt="First Slide" style="height: 100%; object-fit: contain;">
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                          <img src="{{ asset('img/foto2.jpg') }}" class="d-block w-100" alt="Second Slide" style="height: 100%; object-fit: contain;">
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                          <img src="{{ asset('img/foto3.jpg') }}" class="d-block w-100" alt="Third Slide" style="height: 100%; object-fit: contain;">
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  
                  
                <!-- Bagian Statistik atau Informasi lainnya -->
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="card-title">Total Warga Terdaftar</h4>
                                <p class="card-text">{{ $jumlahWarga }} Warga</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="card-title">jumlah Pengajuan Surat</h4>
                                <p class="card-text">{{ $surat }} Surat</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian Berita Terbaru -->
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h2 class="text-center mb-4">Berita Terbaru</h2>
                        <div class="row">
                            @foreach ($beritas as $berita)
                                <div class="col-md-4">
                                    <div class="card mb-4" style="height: 100%;">
                                        @if ($berita->foto)
                                            <img src="{{ asset('storage/' . $berita->foto) }}" class="card-img-top" alt="{{ $berita->judul }}" style="height: 200px; object-fit: cover;">
                                        @endif
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $berita->judul }}</h4>
                                            <p class="card-text">{{ Str::limit($berita->konten, 100) }}</p>
                                            <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
