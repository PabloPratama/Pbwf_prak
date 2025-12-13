@extends('layouts.ltedokter.main')

@section('title', 'Dashboard Dokter')

@section('content')

<div class="row">

    {{-- CARD STATISTIK --}}
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalPasien ?? 0 }}</h3>
                <p>Total Pasien</p>
            </div>
            <div class="icon">
                <i class="fas fa-dog"></i>
            </div>
            <a href="{{ route('dokter.pet.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $totalRekam ?? 0 }}</h3>
                <p>Total Rekam Medis</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-medical"></i>
            </div>
            <a href="{{ route('dokter.rekam-medis.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $totalTindakan ?? 0 }}</h3>
                <p>Tindakan & Terapi</p>
            </div>
            <div class="icon">
                <i class="fas fa-notes-medical"></i>
            </div>
            <a href="{{ route('dokter.tindakan.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

</div>


{{-- GRAFIK --}}
<div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Statistik Pemeriksaan Bulanan</h3>
    </div>

    <div class="card-body">
        <canvas id="chartPemeriksaan" height="80"></canvas>
    </div>
</div>

{{-- SCRIPT GRAFIK --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('chartPemeriksaan').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($bulan ?? ['Jan','Feb','Mar','Apr','Mei','Jun']) !!},
            datasets: [{
                label: 'Jumlah Pemeriksaan',
                data: {!! json_encode($jumlah ?? [3,5,2,8,4,6]) !!},
                borderWidth: 3,
                fill: false,
            }]
        }
    });
</script>

@endsection
