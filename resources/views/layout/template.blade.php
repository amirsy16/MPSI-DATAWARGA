<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Data Warga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .navbar {
            height: 80px;
        }
        .custom-navbar {
            background-color: #01376c;;
        }
         .brand-icon {
            height: 100px; /* Sesuaikan dengan ukuran gambar yang kamu inginkan */
            width: auto; 
        }
        .nav-link {
            font-size: 16px;
            padding: 15px 10px;
            text-align: left;
            font-weight: 500;
        }
        .nav-link.active {
            font-weight: bold;
        }
        .nav-item {
            margin-bottom: 10px;
        }

        .jumbotron {
    margin-left: auto;
    margin-right: auto;
    max-width: 90%; /* Atur lebar maksimum */
}

.card {
    margin-bottom: 20px; /* Atur jarak antar card */
}

.d-blcok {

}


    </style>
</head>

@if(Request::route()->getName() != 'login')
    @if(session('user_type') == 'admin')
        @include('layout.navbar')
    @elseif(session('user_type') == 'user')
        @include('layout.navbaru')
    @else
        @include('layout.navbarp')
    @endif
@endif



<body>
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-9">
                <div class="content">
                    @yield('content') <!-- Tempat untuk konten dari setiap halaman -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
