<?php

use Illuminate\Support\Facades\Route;

//import product controller
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController; // Nanti kita buat simple controller ini
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\RakitPcController;


// --- 1. HALAMAN PUBLIC (LOGIN) ---
Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.proccess');
});


// ... (Import Controller tetap sama)

Route::middleware(['auth'])->group(function () {

    // Logout & Dashboard (Tetap Sama)
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ============================================================
    // GROUP A: KHUSUS SUPER ADMIN
    // (Cuma SuperAdmin yang boleh masuk sini)
    // ============================================================
    
    // PERBAIKAN: Hapus ',Owner'. Jadi cuma 'role:SuperAdmin'
    Route::middleware(['role:SuperAdmin'])->group(function () {
        
        Route::resource('kelola-admin', AdminController::class);
        Route::resource('cabang', CabangController::class);
        Route::resource('hero', HeroController::class);
        
    });

    // ============================================================
    // GROUP B: AKSES SEMUA STAFF (Staff & SuperAdmin)
    // ============================================================
    
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('rakit-pc', RakitPcController::class);

});

// Route::get('/', function () {
//     return view('welcome');
// });
