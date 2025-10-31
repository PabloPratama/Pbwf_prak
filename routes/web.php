<?php

use App\Http\Controllers\Admin\JenisHewanController;
use App\Http\Controllers\Admin\PemilikController;
use App\Http\Controllers\Admin\RasHewanController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KategoriKlinisController;
use App\Http\Controllers\Admin\KodeTindakanTerapiController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');

Route::get('/', [SiteController::class, 'home']);
Route::get('/home', [SiteController::class, 'home'])->name('home');
Route::get('/layanan-umum', [SiteController::class, 'layananUmum'])->name('layanan.umum');
Route::get('/visi-misi', [SiteController::class, 'visiMisi'])->name('visi.misi');
Route::get('/struktur-organisasi', [SiteController::class, 'strukturOrganisasi'])->name('struktur.organisasi');
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::get('/admin/jenis-hewan', [JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
Route::get('/admin/pemilik', [PemilikController::class, 'index'])->name('admin.pemilik.index');
Route::get('/admin/ras-hewan', [RasHewanController::class, 'index'])->name('admin.ras-hewan.index');
Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
Route::get('/admin/kategori-klinis', [KategoriKlinisController::class, 'index'])->name('admin.kategori-klinis.index');
Route::get('/admin/kode-tindakan-terapi', [KodeTindakanTerapiController::class, 'index'])->name('admin.kode-tindakan-terapi.index');
Route::get('/admin/pet', [PetController::class, 'index'])->name('admin.pet.index');
Route::get('/admin/role', [RoleController::class, 'index'])->name('admin.role.index');
Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
