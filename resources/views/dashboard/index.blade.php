@extends('layout.template')

<!-- Body Dashboard Pengunjung -->
<body class="vh-100">

    <div class="container-fluid h-100 mt-5 pt-5"> <!-- Menambahkan padding-top -->
        <div class="row h-100">
            <!-- Konten Dashboard -->
            <div class="col-md-12">
                <!-- Bagian Ucapan Selamat Datang -->
                <div class="mt-3 text-center" style="background-color: #dff0d8; padding: 10px; border-radius: 5px;">
                    <h2>Selamat Datang diwebsite DataWarga RT 14 Puri Masurai</h2>
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
                          <img src="{{ asset('img/foto4.jpg') }}" class="d-block w-100" alt="Second Slide" style="height: 100%; object-fit: contain;">
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                          <img src="{{ asset('img/foto5.jpg') }}" class="d-block w-100" alt="Third Slide" style="height: 100%; object-fit: contain;">
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

                  <div class="jumbotron bg-light p-4 rounded mt-5 shadow-lg" style="background-color: #f8f9fa;">
                    <h1 class="display-4 text-center text-dark">Informasi</h1>
                    <hr class="my-4">
                    <div class="text-justify text-secondary" style="font-size: 1.1rem; line-height: 1.8;">
                        <p class="lead text-dark">Assalamu’alaikum Wr. Wb.</p>
                        <p class="text-dark">Salam sejahtera untuk kita semua,</p>
                        
                        <p>
                            Perkembangan Ilmu Pengetahuan dan Teknologi (IPTEK) adalah berkah yang patut kita syukuri. 
                            Dengan kemajuan teknologi, kita telah memasuki era baru di berbagai bidang seperti E-Commerce, 
                            Elektronik Banking, Elektronik Bisnis, dan Electronic Education (telekonferensi). Bahkan, 
                            dalam menjalani aktivitas sehari-hari, kita semakin dimudahkan dengan kehadiran teknologi ini.
                        </p>
                        
                        <p>
                            Pemanfaatan Teknologi Informasi dan Komunikasi (TIK) melalui website ini diharapkan dapat meningkatkan 
                            eksistensi serta optimalisasi peran dan fungsi perangkat RT 14 Puri Masurai Lorong Kemajuan, Mendalo, 
                            sebagai institusi pelayan masyarakat. Selain itu, website ini akan membantu dalam menyosialisasikan 
                            berbagai program pemerintah kepada masyarakat. Pengembangan website ini bukan hanya untuk memenuhi 
                            kebutuhan internal pengurus RT, tetapi juga diharapkan dapat memenuhi harapan masyarakat yang membutuhkan 
                            informasi terkait data dan pelayanan yang diselenggarakan oleh perangkat RT.
                        </p>
                        
                        <p>
                            Tentu, keberhasilan dalam mencapai tujuan ini tidak akan sempurna tanpa partisipasi aktif dari berbagai pihak. 
                            Oleh karena itu, kami sangat mengharapkan kritik dan saran dari masyarakat. Begitu pula, kami berharap 
                            perangkat Kelurahan dapat merespons dan berbagi masukan yang bermanfaat demi kemajuan RT 14 Puri Masurai, 
                            khususnya, dan Desa Mendalo, pada umumnya.
                        </p>
                        
                        <p>
                            Akhir kata, saya menyampaikan apresiasi atas peluncuran website terbaru ini. Semoga dengan hadirnya website 
                            baru ini, informasi mengenai lingkungan RT 14 Puri Masurai serta kegiatan yang ada di dalamnya dapat diakses 
                            dengan cepat dan akurat oleh masyarakat luas.
                        </p>
                        
                        <p class="font-italic text-dark">Wassalamu’alaikum Wr. Wb.,</p>
                        <p class="text-dark"><strong>Ketua RT 14 Puri Masurai Lorong Kemajuan,<br>Mariono BA</strong></p>
                    </div>
                </div>

                <!-- Bagian Statistik atau Informasi lainnya -->
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="card-title">Total Warga Terdaftar</h4>
                                <p class="card-text">{{ $jumlahWarga }} warga</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian Berita Terbaru -->
                <section id="berita" >
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
            </section>
            </div>
        </div>
    </div>
</body>
