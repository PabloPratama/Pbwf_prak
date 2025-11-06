<?php

use App\Http\Controllers\Admin\JenisHewanController;
use App\Http\Controllers\Admin\PemilikController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/jenis-hewan', [JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
Route::get('/admin/pemilik', [PemilikController::class, 'index'])->name('admin.pemilik.index');
