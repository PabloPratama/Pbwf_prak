@extends('layouts.lteresepsionis.main')

@section('title', 'Dashboard Resepsionis')

@section('content')

<div class="row">

    <!-- CARD PEMILIK -->
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalPemilik ?? 0 }}</h3>
                <p>Total Pemilik</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('resepsionis.pemilik.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <!-- CARD PASIEN -->
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $totalPet ?? 0 }}</h3>
                <p>Total Pasien</p>
            </div>
            <div class="icon">
                <i class="fas fa-dog"></i>
            </div>
            <a href="{{ route('resepsionis.pet.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <!-- CARD TEMU DOKTER -->
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $totalTemuDokter ?? 0 }}</h3>
                <p>Temu Dokter</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-check"></i>
            </div>
            <a href="{{ route('resepsionis.temu-dokter.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

</div>

<!-- CARD INFORMASI -->
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Aktivitas Resepsionis</h3>
    </div>
    <div class="card-body">
        <p>
            Panel ini digunakan oleh resepsionis untuk mengelola data administrasi
            layanan klinik hewan secara harian.
        </p>
        <ul>
            <li>Pendataan pemilik & pasien</li>
            <li>Pengelolaan jadwal temu dokter</li>
            <li>Mendukung alur pelayanan klinik</li>
        </ul>
    </div>
</div>

@endsection
