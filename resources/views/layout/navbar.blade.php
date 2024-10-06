<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/icon1.png') }}" alt="Brand Icon" class="brand-icon"> <!-- Ganti 'icon1.png' dengan jalur ikon yang benar -->
        </a>
        
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-4">
                    <a class="nav-link active text-white" href="{{ route('dashboard_admin.index') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="{{ route('data_warga.index') }}">
                        <i class="fas fa-users"></i> Data Warga
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="{{ route('berita.index') }}">
                        <i class="fas fa-newspaper"></i> Berita
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="{{ route('surat.index') }}">
                        <i class="fas fa-envelope"></i> Surat
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: inline;">
                        @csrf
                        <button type="submit" class="nav-link text-white" style="background: none; border: none; cursor: pointer;">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
