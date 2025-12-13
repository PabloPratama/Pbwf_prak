@extends('layouts.ltepemilik.main')

@section('title', 'Dashboard Pemilik')

@section('content')

<div class="row">

    <!-- CARD PET CARE SCORE -->
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>92%</h3>
                <p>Pet Care Score</p>
            </div>
            <div class="icon">
                <i class="fas fa-heartbeat"></i>
            </div>
            <span class="small-box-footer">
                Kondisi sangat baik
            </span>
        </div>
    </div>

    <!-- CARD AKTIVITAS BULAN INI -->
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>7</h3>
                <p>Aktivitas Bulan Ini</p>
            </div>
            <div class="icon">
                <i class="fas fa-walking"></i>
            </div>
            <span class="small-box-footer">
                Termasuk grooming & kontrol
            </span>
        </div>
    </div>

    <!-- CARD REMINDER -->
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>2</h3>
                <p>Pengingat Aktif</p>
            </div>
            <div class="icon">
                <i class="fas fa-bell"></i>
            </div>
            <span class="small-box-footer">
                Vaksin & vitamin
            </span>
        </div>
    </div>

    <!-- CARD LOYALTY LEVEL -->
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>Gold</h3>
                <p>Status Keanggotaan</p>
            </div>
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <span class="small-box-footer">
                Member aktif
            </span>
        </div>
    </div>

</div>

<!-- INFORMASI PERSONAL -->
<div class="row mt-4">

    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">
                    <i class="fas fa-info-circle"></i> Informasi Pemilik
                </h3>
            </div>
            <div class="card-body">
                <p>
                    Selamat datang di panel pemilik RSHP.  
                    Dashboard ini dirancang untuk membantu Anda
                    memahami pola perawatan hewan secara ringkas dan nyaman.
                </p>
                <ul>
                    <li>Ringkasan kondisi peliharaan</li>
                    <li>Pengingat perawatan rutin</li>
                    <li>Insight kebiasaan perawatan</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- TIPS & EDUKASI -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="card-title">
                    <i class="fas fa-lightbulb"></i> Tips Hari Ini
                </h3>
            </div>
            <div class="card-body">
                <blockquote class="blockquote">
                    <p class="mb-0">
                        Pastikan hewan mendapatkan air minum bersih
                        dan aktivitas fisik minimal 15 menit per hari.
                    </p>
                    <footer class="blockquote-footer">
                        RSHP Veterinary Care
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

</div>

<!-- QUOTE -->
<div class="card mt-4">
    <div class="card-body text-center">
        <i class="fas fa-paw fa-2x text-muted mb-2"></i>
        <p class="mb-0 font-italic">
            "Hewan yang sehat adalah hasil dari perhatian kecil yang dilakukan setiap hari."
        </p>
    </div>
</div>

@endsection
