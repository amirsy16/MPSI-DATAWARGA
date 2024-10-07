<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataWargaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\pengunjung;
use App\Http\Controllers\SuratController;

use Illuminate\Support\Facades\Auth;
use app\Models\DataWarga;
use Illuminate\Routing\Router;



Route::get('/', [pengunjung::class, 'index'])->name('pengunjung.index');



Route::get('/coba', function () {
    return view('coba');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/loginuser', function () {
    return view('loginuser');
});



// routes/web.php




Route::get('/dashboarduser', function () {
    return view('dashboarduser');
});

Route::get('/apa', function(){
    return view('apa');
});





Route::resource('data_warga', DataWargaController::class);

Route::resource('berita', BeritaController::class);

Route::resource('dashboard_admin', DashboardAdminController::class);

Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Route untuk dashboard admin & warga
Route::get('/admin/dashboard', [AuthController::class, 'index'])->name('auth.index');
Route::get('/warga/dashboard', [AuthController::class, 'index'])->name('auth.index')->middleware('auth:warga');



// Rute untuk halaman daftar surat
Route::get('/surat', [SuratController::class, 'index'])->name('surat.index');

// Rute untuk form permintaan surat baru (khusus user)
Route::get('/surat/create', [SuratController::class, 'create'])->name('surat.create');

// Rute untuk menyimpan permintaan surat baru
Route::post('/surat', [SuratController::class, 'store'])->name('surat.store');

// Rute untuk admin mengubah status surat
Route::put('/surat/{id}/update-status', [SuratController::class, 'updateStatus'])->name('surat.updateStatus');
Route::get('/surat/{id}/edit_status', [SuratController::class, 'editStatus'])->name('surat.edit_status');



Route::get('/kontak-admin', function () {
    return view('kontak_admin');
})->name('kontak.admin');



Route::get('/tentang', function () {
    return view('about'); // Ganti dengan nama view yang sesuai
})->name('about');









