    @extends('layout.template')

    @section('content')
    <div class="container vh-10 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-md-6 offset-md-5">
                <!-- Logo -->
                <img src="{{ asset('img/icon-login.png') }}" alt="Logo RT/RW" class="img-fluid d-block mx-auto mb-1" style="max-height: 300px;">

                <!-- Welcome Message -->
                <h1 class="mb-3"  style="font-weight: normal; font-size: 24px;">Selamat datang di website DataWarga RT 04 Lorong Kemajuan</h1>
                <p class="text-muted">Bagi user/warga yang belum bisa login, mohon tanyakan ke Admin.</p>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="identifier" class="form-control" id="identifier" placeholder="NIK" required>
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 shadow-sm"><i class="fa fa-unlock"></i> Login</button>
                </form>

            </div>
        </div>
    </div>
    @endsection
