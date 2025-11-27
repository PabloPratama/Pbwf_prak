<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\JenisHewanController;
use App\Http\Controllers\Admin\PemilikController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\RasHewanController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KategoriKlinisController;
use App\Http\Controllers\Admin\TindakanController;
use App\Http\Controllers\Admin\TemuDokterController;
use App\Http\Controllers\Admin\RekamMedisController;
use App\Http\Controllers\Admin\DetailRekamMedisController;
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
use App\Http\Controllers\Pemilik\DashboardPemilikController;
use App\Http\Controllers\Pemilik\PetPemilikController;


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
    Route::get('/admin/jenis-hewan/create', [JenisHewanController::class, 'create'])->name('admin.jenis-hewan.create');
    Route::post('/admin/jenis-hewan/store', [JenisHewanController::class, 'store'])->name('admin.jenis-hewan.store');
    Route::get('/admin/pemilik', [PemilikController::class, 'index'])->name('admin.pemilik.index');
    Route::get('/admin/pemilik/create', [PemilikController::class, 'create'])->name('admin.pemilik.create');
    Route::post('/admin/pemilik/store', [PemilikController::class, 'store'])->name('admin.pemilik.store');
    Route::get('/admin/role', [RoleController::class, 'index'])->name('admin.role.index');
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/admin/pet', [PetController::class, 'index'])->name('admin.pet.index');
    Route::get('/admin/ras-hewan', [RasHewanController::class, 'index'])->name('admin.ras-hewan.index');
    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
    Route::get('/admin/kategori-klinis', [KategoriKlinisController::class, 'index'])->name('admin.kategori-klinis.index');
    Route::get('/admin/tindakan-terapi', [TindakanController::class, 'index'])->name('admin.tindakan-terapi.index');
    Route::get('/admin/temu-dokter', [TemuDokterController::class, 'index'])->name('admin.temu-dokter.index');
    Route::get('/admin/rekam-medis', [RekamMedisController::class, 'index'])->name('admin.rekam-medis.index');
    Route::get('/admin/detail-rekam-medis', [DetailRekamMedisController::class, 'index'])->name('admin.detail-rekam-medis.index');
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

// ========== Pemilik ==========
Route::middleware(['IsPemilik'])->group(function () {
    Route::get('/pemilik/dashboard', [DashboardPemilikController::class, 'index'])->name('pemilik.dashboard');
    Route::get('/pemilik/pet', [PetPemilikController::class, 'index'])->name('pemilik.pet.index');
});

