@extends('layouts.lte.main')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">Dashboard RSHP</h2>

    <div class="row">

        <!-- INFO BOX 1 -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>98%</h3>
                    <p>Tingkat Kepuasan Pasien</p>
                </div>
                <div class="icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
            </div>
        </div>

        <!-- INFO BOX 2 -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>120</h3>
                    <p>Pasien Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-injured"></i>
                </div>
            </div>
        </div>

        <!-- INFO BOX 3 -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>42</h3>
                    <p>Dokter Aktif</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-md"></i>
                </div>
            </div>
        </div>

        <!-- INFO BOX 4 -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner text-dark">
                    <h3>18</h3>
                    <p>Ruangan Tersedia</p>
                </div>
                <div class="icon">
                    <i class="fas fa-procedures"></i>
                </div>
            </div>
        </div>

    </div>

    <!-- SECTION REPORT -->
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Rekap Pelayanan RSHP</h3>
        </div>
        <div class="card-body" style="background: #2f3b46">

            <!-- GAMBAR GRAFIK -->
            <div class="row text-white">

                <div class="col-md-3 text-center border-right">
                    <p class="text-success mb-0">↑ 12%</p>
                    <h4>1.240 Pasien</h4>
                    <small>Total Bulan Ini</small>
                </div>

                <div class="col-md-3 text-center border-right">
                    <p class="text-warning mb-0">~</p>
                    <h4>320 Kasus</h4>
                    <small>Total Gawat Darurat</small>
                </div>

                <div class="col-md-3 text-center border-right">
                    <p class="text-primary mb-0">↑ 7%</p>
                    <h4>890 Kontrol</h4>
                    <small>Pasien Rawat Jalan</small>
                </div>

                <div class="col-md-3 text-center">
                    <p class="text-danger mb-0">↓ 3%</p>
                    <h4>67 Operasi</h4>
                    <small>Total Tindakan Bedah</small>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
