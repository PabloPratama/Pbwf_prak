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
use App\Http\Controllers\Resepsionis\TemuDokterResepsionisController;

use App\Http\Controllers\Dokter\DashboardDokterController;
use App\Http\Controllers\Dokter\JenisHewanDokterController;
use App\Http\Controllers\Dokter\RasHewanDokterController;
use App\Http\Controllers\Dokter\KategoriDokterController;
use App\Http\Controllers\Dokter\KategoriKlinisDokterController;
use App\Http\Controllers\Dokter\TindakanDokterController;
use App\Http\Controllers\Dokter\PetDokterController;
use App\Http\Controllers\Dokter\RekamMedisDokterController;
use App\Http\Controllers\Dokter\DetailRekamMedisDokterController;
use App\Http\Controllers\Dokter\DokterController;

use App\Http\Controllers\Perawat\DashboardPerawatController;
use App\Http\Controllers\Perawat\PemilikPerawatController;
use App\Http\Controllers\Perawat\PetPerawatController;
use App\Http\Controllers\Perawat\JenisHewanPerawatController;
use App\Http\Controllers\Perawat\RasHewanPerawatController;
use App\Http\Controllers\Perawat\TindakanPerawatController;
use App\Http\Controllers\Perawat\RekamMedisPerawatController;
use App\Http\Controllers\Perawat\DetailRekamMedisPerawatController;
use App\Http\Controllers\Perawat\PerawatController;

use App\Http\Controllers\Pemilik\DashboardPemilikController;
use App\Http\Controllers\Pemilik\PetPemilikController;
use App\Http\Controllers\Pemilik\PemilikPemilikController;
use App\Http\Controllers\Pemilik\TemuDokterPemilikController;
use App\Http\Controllers\Pemilik\RekamMedisPemilikController;


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
    Route::get('/admin/jenis-hewan/{id}/edit', [JenisHewanController::class, 'edit'])->name('admin.jenis-hewan.edit');
    Route::put('/admin/jenis-hewan/{id}', [JenisHewanController::class, 'update'])->name('admin.jenis-hewan.update');
    Route::delete('/admin/jenis-hewan/{id}', [JenisHewanController::class, 'destroy'])->name('admin.jenis-hewan.destroy');
    Route::get('/admin/pemilik', [PemilikController::class, 'index'])->name('admin.pemilik.index');
    Route::get('/admin/pemilik/create', [PemilikController::class, 'create'])->name('admin.pemilik.create');
    Route::post('/admin/pemilik/store', [PemilikController::class, 'store'])->name('admin.pemilik.store');
    Route::get('/admin/pemilik/{id}/edit', [PemilikController::class, 'edit'])->name('admin.pemilik.edit');
    Route::put('/admin/pemilik/{id}', [PemilikController::class, 'update'])->name('admin.pemilik.update');
    Route::delete('/admin/pemilik/{id}', [PemilikController::class, 'destroy'])->name('admin.pemilik.destroy');
    Route::get('/admin/role', [RoleController::class, 'index'])->name('admin.role.index');
    Route::get('/admin/role/create', [RoleController::class, 'create'])->name('admin.role.create');
    Route::post('/admin/role/store', [RoleController::class, 'store'])->name('admin.role.store');
    Route::get('/admin/role/{id}/edit', [RoleController::class, 'edit'])->name('admin.role.edit');
    Route::put('/admin/role/{id}', [RoleController::class, 'update'])->name('admin.role.update');
    Route::delete('/admin/role/{id}', [RoleController::class, 'destroy'])->name('admin.role.destroy');
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/admin/user/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    Route::get('/admin/pet', [PetController::class, 'index'])->name('admin.pet.index');
    Route::get('/admin/pet/create', [PetController::class, 'create'])->name('admin.pet.create');
    Route::post('/admin/pet/store', [PetController::class, 'store'])->name('admin.pet.store');
    Route::get('/admin/pet/{id}/edit', [PetController::class, 'edit'])->name('admin.pet.edit');
    Route::put('/admin/pet/{id}', [PetController::class, 'update'])->name('admin.pet.update');
    Route::delete('/admin/pet/{id}', [PetController::class, 'destroy'])->name('admin.pet.destroy');
    Route::get('/admin/ras-hewan', [RasHewanController::class, 'index'])->name('admin.ras-hewan.index');
    Route::get('/admin/ras-hewan/create', [RasHewanController::class, 'create'])->name('admin.ras-hewan.create');
    Route::post('/admin/ras-hewan/store', [RasHewanController::class, 'store'])->name('admin.ras-hewan.store');
    Route::get('/admin/ras-hewan/{id}/edit', [RasHewanController::class, 'edit'])->name('admin.ras-hewan.edit');
    Route::put('/admin/ras-hewan/{id}', [RasHewanController::class, 'update'])->name('admin.ras-hewan.update');
    Route::delete('/admin/ras-hewan/{id}', [RasHewanController::class, 'destroy'])->name('admin.ras-hewan.destroy');
    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
    Route::get('/admin/kategori/create', [KategoriController::class, 'create'])->name('admin.kategori.create');
    Route::post('/admin/kategori/store', [KategoriController::class, 'store'])->name('admin.kategori.store');
    Route::get('/admin/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    Route::put('/admin/kategori/{id}', [KategoriController::class, 'update'])->name('admin.kategori.update');
    Route::delete('/admin/kategori/{id}', [KategoriController::class, 'destroy'])->name('admin.kategori.destroy');
    Route::get('/admin/kategori-klinis', [KategoriKlinisController::class, 'index'])->name('admin.kategori-klinis.index');
    Route::get('/admin/kategori-klinis/create', [KategoriKlinisController::class, 'create'])->name('admin.kategori-klinis.create');
    Route::post('/admin/kategori-klinis/store', [KategoriKlinisController::class, 'store'])->name('admin.kategori-klinis.store');
    Route::get('/admin/kategori-klinis/{id}/edit', [KategoriKlinisController::class, 'edit'])->name('admin.kategori-klinis.edit');
    Route::put('/admin/kategori-klinis/{id}', [KategoriKlinisController::class, 'update'])->name('admin.kategori-klinis.update');
    Route::delete('/admin/kategori-klinis/{id}', [KategoriKlinisController::class, 'destroy'])->name('admin.kategori-klinis.destroy');
    Route::get('/admin/tindakan-terapi', [TindakanController::class, 'index'])->name('admin.tindakan-terapi.index');
    Route::get('/admin/tindakan-terapi/create', [TindakanController::class, 'create'])->name('admin.tindakan-terapi.create');
    Route::post('/admin/tindakan-terapi/store', [TindakanController::class, 'store'])->name('admin.tindakan-terapi.store');
    Route::get('/admin/tindakan-terapi/{id}/edit', [TindakanController::class, 'edit'])->name('admin.tindakan-terapi.edit');
    Route::put('/admin/tindakan-terapi/{id}', [TindakanController::class, 'update'])->name('admin.tindakan-terapi.update');
    Route::delete('/admin/tindakan-terapi/{id}', [TindakanController::class, 'destroy'])->name('admin.tindakan-terapi.destroy');
    Route::get('/admin/temu-dokter', [TemuDokterController::class, 'index'])->name('admin.temu-dokter.index');
    Route::get('/admin/temu-dokter/create', [TemuDokterController::class, 'create'])->name('admin.temu-dokter.create');
    Route::post('/admin/temu-dokter/store', [TemuDokterController::class, 'store'])->name('admin.temu-dokter.store');
    Route::get('/admin/temu-dokter/{id}/edit', [TemuDokterController::class, 'edit'])->name('admin.temu-dokter.edit');
    Route::put('/admin/temu-dokter/{id}', [TemuDokterController::class, 'update'])->name('admin.temu-dokter.update');
    Route::delete('/admin/temu-dokter/{id}', [TemuDokterController::class, 'destroy'])->name('admin.temu-dokter.destroy');
    Route::get('/admin/rekam-medis', [RekamMedisController::class, 'index'])->name('admin.rekam-medis.index');
    Route::get('/admin/rekam-medis/create', [RekamMedisController::class, 'create'])->name('admin.rekam-medis.create');
    Route::post('/admin/rekam-medis', [RekamMedisController::class, 'store'])->name('admin.rekam-medis.store');
    Route::get('/admin/rekam-medis/{id}/edit', [RekamMedisController::class, 'edit'])->name('admin.rekam-medis.edit');
    Route::put('/admin/rekam-medis/{id}', [RekamMedisController::class, 'update'])->name('admin.rekam-medis.update');
    Route::delete('/admin/rekam-medis/{id}', [RekamMedisController::class, 'destroy'])->name('admin.rekam-medis.destroy');
    Route::get('/admin/detail-rekam-medis', [DetailRekamMedisController::class, 'index'])->name('admin.detail-rekam-medis.index');
    Route::get('/admin/detail-rekam-medis/create', [DetailRekamMedisController::class, 'create'])->name('admin.detail-rekam-medis.create');
    Route::post('/admin/detail-rekam-medis', [DetailRekamMedisController::class, 'store'])->name('admin.detail-rekam-medis.store');
    Route::get('/admin/detail-rekam-medis/{id}/edit', [DetailRekamMedisController::class, 'edit'])->name('admin.detail-rekam-medis.edit');
    Route::put('/admin/detail-rekam-medis/{id}', [DetailRekamMedisController::class, 'update'])->name('admin.detail-rekam-medis.update');
    Route::delete('/admin/detail-rekam-medis/{id}', [DetailRekamMedisController::class, 'destroy'])->name('admin.detail-rekam-medis.destroy');
});

// ========== RESEPSIONIS ==========
Route::middleware(['IsResepsionis'])->group(function () {
    Route::get('/resepsionis/dashboard', [DashboardResepsionisController::class, 'index'])->name('resepsionis.dashboard');
    Route::get('/resepsionis/pemilik', [PemilikResepsionisController::class, 'index'])->name('resepsionis.pemilik.index');
    Route::get('/resepsionis/pemilik/create', [PemilikResepsionisController::class, 'create'])->name('resepsionis.pemilik.create');
    Route::post('/resepsionis/pemilik/store', [PemilikResepsionisController::class, 'store'])->name('resepsionis.pemilik.store');
    Route::get('/resepsionis/pemilik/{id}/edit', [PemilikResepsionisController::class, 'edit'])->name('resepsionis.pemilik.edit');
    Route::put('/resepsionis/pemilik/{id}', [PemilikResepsionisController::class, 'update'])->name('resepsionis.pemilik.update');
    Route::delete('/resepsionis/pemilik/{id}', [PemilikResepsionisController::class, 'destroy'])->name('resepsionis.pemilik.destroy');
    Route::get('/resepsionis/pet', [PetResepsionisController::class, 'index'])->name('resepsionis.pet.index');
    Route::get('/resepsionis/pet/create', [PetResepsionisController::class, 'create'])->name('resepsionis.pet.create');
    Route::post('/resepsionis/pet/store', [PetResepsionisController::class, 'store'])->name('resepsionis.pet.store');
    Route::get('/resepsionis/pet/{id}/edit', [PetResepsionisController::class, 'edit'])->name('resepsionis.pet.edit');
    Route::put('/resepsionis/pet/{id}', [PetResepsionisController::class, 'update'])->name('resepsionis.pet.update');
    Route::delete('/resepsionis/pet/{id}', [PetResepsionisController::class, 'destroy'])->name('resepsionis.pet.destroy');
    Route::get('/resepsionis/temu-dokter', [TemuDokterResepsionisController::class, 'index'])->name('resepsionis.temu-dokter.index');
    Route::get('/resepsionis/temu-dokter/create', [TemuDokterResepsionisController::class, 'create'])->name('resepsionis.temu-dokter.create');
    Route::post('/resepsionis/temu-dokter/store', [TemuDokterResepsionisController::class, 'store'])->name('resepsionis.temu-dokter.store');
    Route::get('/resepsionis/temu-dokter/{id}/edit', [TemuDokterResepsionisController::class, 'edit'])->name('resepsionis.temu-dokter.edit');
    Route::put('/resepsionis/temu-dokter/{id}', [TemuDokterResepsionisController::class, 'update'])->name('resepsionis.temu-dokter.update');
    Route::delete('/resepsionis/temu-dokter/{id}', [TemuDokterResepsionisController::class, 'destroy'])->name('resepsionis.temu-dokter.destroy');
});

// ========== DOKTER ==========
Route::middleware(['IsDokter'])->group(function () {
    Route::get('/dokter/dashboard', [DashboardDokterController::class, 'index'])->name('dokter.dashboard');
    Route::get('/dokter/jenis-hewan', [JenisHewanDokterController::class, 'index'])->name('dokter.jenis-hewan.index');
    Route::get('/dokter/ras-hewan', [RasHewanDokterController::class, 'index'])->name('dokter.ras-hewan.index');
    Route::get('/dokter/kategori', [KategoriDokterController::class, 'index'])->name('dokter.kategori.index');
    Route::get('/dokter/kategori-klinis', [KategoriKlinisDokterController::class, 'index'])->name('dokter.kategori-klinis.index');
    Route::get('/dokter/tindakan-terapi', [TindakanDokterController::class, 'index'])->name('dokter.tindakan.index');
    Route::get('/dokter/pet', [PetDokterController::class, 'index'])->name('dokter.pet.index');
    Route::get('/dokter/rekam-medis', [RekamMedisDokterController::class, 'index'])->name('dokter.rekam-medis.index');
    Route::get('/dokter/detail-rekam-medis', [DetailRekamMedisDokterController::class, 'index'])->name('dokter.detail-rekam-medis.index');
    Route::get('/dokter/detail-rekam-medis/create', [DetailRekamMedisDokterController::class, 'create'])->name('dokter.detail-rekam-medis.create');
    Route::post('/dokter/detail-rekam-medis/store', [DetailRekamMedisDokterController::class, 'store'])->name('dokter.detail-rekam-medis.store');
    Route::get('/dokter/detail-rekam-medis/{id}/edit', [DetailRekamMedisDokterController::class, 'edit'])->name('dokter.detail-rekam-medis.edit');
    Route::put('/dokter/detail-rekam-medis/{id}', [DetailRekamMedisDokterController::class, 'update'])->name('dokter.detail-rekam-medis.update');
    Route::delete('/dokter/detail-rekam-medis/{id}', [DetailRekamMedisDokterController::class, 'destroy'])->name('dokter.detail-rekam-medis.destroy');
    Route::get('/dokter/dokter', [DokterController::class, 'index'])->name('dokter.dokter.index');
});

// ========== Perawat ==========
Route::middleware(['IsPerawat'])->group(function () {
    Route::get('/perawat/dashboard', [DashboardPerawatController::class, 'index'])->name('perawat.dashboard');
    Route::get('/perawat/jenis-hewan', [JenisHewanPerawatController::class, 'index'])->name('perawat.jenis-hewan.index'); 
    Route::get('/perawat/ras-hewan', [RasHewanPerawatController::class, 'index'])->name('perawat.ras-hewan.index');
    Route::get('/perawat/pemilik', [PemilikPerawatController::class, 'index'])->name('perawat.pemilik.index');
    Route::get('/perawat/tindakan-terapi', [TindakanPerawatController::class, 'index'])->name('perawat.tindakan.index');
    Route::get('/perawat/pet', [PetPerawatController::class, 'index'])->name('perawat.pet.index');
    Route::get('/perawat/rekam-medis', [RekamMedisPerawatController::class, 'index'])->name('perawat.rekam-medis.index');
    Route::get('/perawat/rekam-medis/create', [RekamMedisPerawatController::class, 'create'])->name('perawat.rekam-medis.create');
    Route::post('/perawat/rekam-medis', [RekamMedisPerawatController::class, 'store'])->name('perawat.rekam-medis.store');
    Route::get('/perawat/rekam-medis/{id}/edit', [RekamMedisPerawatController::class, 'edit'])->name('perawat.rekam-medis.edit');
    Route::put('/perawat/rekam-medis/{id}', [RekamMedisPerawatController::class, 'update'])->name('perawat.rekam-medis.update');
    Route::delete('/perawat/rekam-medis/{id}', [RekamMedisPerawatController::class, 'destroy'])->name('perawat.rekam-medis.destroy');
    Route::get('/perawat/detail-rekam-medis', [DetailRekamMedisPerawatController::class, 'index'])->name('perawat.detail-rekam-medis.index');
    Route::get('/perawat/perawat', [PerawatController::class, 'index'])->name('perawat.perawat.index');
});

// ========== Pemilik ==========
Route::middleware(['IsPemilik'])->group(function () {
    Route::get('/pemilik/dashboard', [DashboardPemilikController::class, 'index'])->name('pemilik.dashboard');
    Route::get('/pemilik/pet', [PetPemilikController::class, 'index'])->name('pemilik.pet.index');
    Route::get('/pemilik/pemilik', [PemilikPemilikController::class, 'index'])->name('pemilik.pemilik.index');
    Route::get('/pemilik/temu-dokter', [TemuDokterPemilikController::class, 'index'])->name('pemilik.temu-dokter.index');
    Route::get('/pemilik/rekam-medis', [RekamMedisPemilikController::class, 'index'])->name('pemilik.rekam-medis.index');
});

