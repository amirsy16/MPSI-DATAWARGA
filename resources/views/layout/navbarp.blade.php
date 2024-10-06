<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/icon1.png') }}" alt="Brand Icon" class="brand-icon"">
        </a>
        
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-4">
                    <a class="nav-link active text-white" href="{{ route('pengunjung.index') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="{{ route('about') }}">
                        <i class="fas fa-info-circle"></i> Tentang
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="kontak-admin">
                        <i class="fas fa-phone-alt"></i> Kontak
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a href="{{ route('auth.index') }}" class="nav-link text-white">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
