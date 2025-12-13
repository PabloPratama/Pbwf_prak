@extends('layouts.lteperawat.main')

@section('title', 'Dashboard Perawat')

@section('content')

<div class="row">

    {{-- CARD PASIEN --}}
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalPasien ?? 0 }}</h3>
                <p>Total Pasien</p>
            </div>
            <div class="icon">
                <i class="fas fa-dog"></i>
            </div>
            <a href="{{ route('perawat.pet.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    {{-- CARD REKAM MEDIS --}}
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $totalRekam ?? 0 }}</h3>
                <p>Total Rekam Medis</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-medical"></i>
            </div>
            <a href="{{ route('perawat.rekam-medis.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    {{-- CARD TINDAKAN --}}
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $totalTindakan ?? 0 }}</h3>
                <p>Tindakan & Terapi</p>
            </div>
            <div class="icon">
                <i class="fas fa-notes-medical"></i>
            </div>
            <a href="{{ route('perawat.tindakan.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

</div>

{{-- INFO AKTIVITAS --}}
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Aktivitas Perawat</h3>
    </div>
    <div class="card-body">
        <p>
            Panel ini digunakan perawat untuk membantu pendataan pasien,
            pemilik, serta mendukung proses pelayanan medis harian.
        </p>
        <ul>
            <li>Monitoring data pasien</li>
            <li>Membantu input rekam medis</li>
            <li>Mendukung tindakan & terapi</li>
        </ul>
    </div>
</div>

@endsection
