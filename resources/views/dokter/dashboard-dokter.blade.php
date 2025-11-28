@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">
                    {{ __('Dashboard Dokter') }} — {{ session('user_name') }}
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} **{{ session('user_role_name') }}**

                    <div class="mt-4">
                        <p>Menu Dokter:</p>

                        <a href="{{ route('dokter.jenis-hewan.index') }}" class="btn btn-primary mb-2 w-100">
                            Lihat Data Jenis Hewan
                        </a>

                        <a href="{{ route('dokter.ras-hewan.index') }}" class="btn btn-success mb-2 w-100">
                            Lihat Data Ras Hewan
                        </a>

                        <a href="{{ route('dokter.kategori.index') }}" class="btn btn-info mb-2 w-100">
                            Lihat Data Kategori
                        </a>

                        <a href="{{ route('dokter.kategori-klinis.index') }}" class="btn btn-warning mb-2 w-100">
                            Lihat Data Kategori Klinis
                        </a>

                        <a href="{{ route('dokter.tindakan.index') }}" class="btn btn-danger mb-2 w-100">
                            Lihat Data Kode Tindakan & Terapi
                        </a>

                        <a href="{{ route('dokter.pet.index') }}" class="btn btn-warning mb-2 w-100">
                            Lihat Data Pasien
                        </a>

                        <a href="{{ route('dokter.rekam-medis.index') }}" class="btn btn-primary mb-2 w-100">
                            Lihat Data Rekam medis
                        </a>

                        <a href="{{ route('dokter.detail-rekam-medis.index') }}" class="btn btn-info mb-2 w-100">
                            Lihat Data Detail Rekam medis
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
