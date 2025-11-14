<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\JenisHewanController;
use App\Http\Controllers\Admin\PemilikController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Resepsionis\DashboardResepsionisController;
use App\Http\Controllers\Resepsionis\PemilikResepsionisController;
use App\Http\Controllers\Resepsionis\PetResepsionisController;
use App\Http\Controllers\Dokter\DashboardDokterController;
use App\Http\Controllers\Dokter\JenisHewanDokterController;
use App\Http\Controllers\Dokter\RasHewanDokterController;
use App\Http\Controllers\Dokter\KategoriDokterController;
use App\Http\Controllers\Dokter\KategoriKlinisDokterController;
use App\Http\Controllers\Dokter\TindakanDokterController;
use App\Http\Controllers\Perawat\DashboardPerawatController;
use App\Http\Controllers\Perawat\PemilikPerawatController;
use App\Http\Controllers\Perawat\PetPerawatController;
use App\Http\Controllers\Perawat\JenisHewanPerawatController;
use App\Http\Controllers\Perawat\RasHewanPerawatController;
use App\Http\Controllers\Perawat\TindakanPerawatController;


// ========== HALAMAN PUBLIK ==========
Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/home', [SiteController::class, 'home'])->name('home');
Route::get('/layanan-umum', [SiteController::class, 'layananUmum'])->name('layanan.umum');
Route::get('/visi-misi', [SiteController::class, 'visiMisi'])->name('visi.misi');
Route::get('/struktur-organisasi', [SiteController::class, 'strukturOrganisasi'])->name('struktur.organisasi');

// ========== LOGIN ==========
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ========== ADMIN ==========
Route::middleware(['IsAdministrator'])->group(function () {
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/jenis-hewan', [JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
    Route::get('/admin/pemilik', [PemilikController::class, 'index'])->name('admin.pemilik.index');
    Route::get('/admin/role', [RoleController::class, 'index'])->name('admin.role.index');
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user.index');
});

// ========== RESEPSIONIS ==========
Route::middleware(['IsResepsionis'])->group(function () {
    Route::get('/resepsionis/dashboard', [DashboardResepsionisController::class, 'index'])->name('resepsionis.dashboard');
    Route::get('/resepsionis/pemilik', [PemilikResepsionisController::class, 'index'])->name('resepsionis.pemilik.index');
    Route::get('/resepsionis/pet', [PetResepsionisController::class, 'index'])->name('resepsionis.pet.index');
});

// ========== DOKTER ==========
Route::middleware(['IsDokter'])->group(function () {
    Route::get('/dokter/dashboard', [DashboardDokterController::class, 'index'])->name('dokter.dashboard');
    Route::get('/dokter/jenis-hewan', [JenisHewanDokterController::class, 'index'])->name('dokter.jenis-hewan.index');
    Route::get('/dokter/ras-hewan', [RasHewanDokterController::class, 'index'])->name('dokter.ras-hewan.index');
    Route::get('/dokter/kategori', [KategoriDokterController::class, 'index'])->name('dokter.kategori.index');
    Route::get('/dokter/kategori-klinis', [KategoriKlinisDokterController::class, 'index'])->name('dokter.kategori-klinis.index');
    Route::get('/dokter/tindakan-terapi', [TindakanDokterController::class, 'index'])->name('dokter.tindakan.index');
});

// ========== Perawat ==========
Route::middleware(['IsPerawat'])->group(function () {
    Route::get('/perawat/dashboard', [DashboardPerawatController::class, 'index'])->name('perawat.dashboard');
    Route::get('/perawat/jenis-hewan', [JenisHewanPerawatController::class, 'index'])->name('perawat.jenis-hewan.index'); 
    Route::get('/perawat/ras-hewan', [RasHewanPerawatController::class, 'index'])->name('perawat.ras-hewan.index');
    Route::get('/perawat/pemilik', [PemilikPerawatController::class, 'index'])->name('perawat.pemilik.index');
    Route::get('/perawat/tindakan-terapi', [TindakanPerawatController::class, 'index'])->name('perawat.tindakan.index');
    Route::get('/perawat/pet', [PetPerawatController::class, 'index'])->name('perawat.pet.index');
});

