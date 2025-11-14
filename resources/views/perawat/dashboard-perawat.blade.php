@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">
                    {{ __('Dashboard Perawat') }} — {{ session('user_name') }}
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} **{{ session('user_role_name') }}**

                    <div class="mt-4">
                        <p>Menu Perawat:</p>

                        <a href="{{ route('perawat.pet.index') }}" class="btn btn-primary mb-2 w-100">
                            Lihat Data Hewan
                        </a>

                        <a href="{{ route('perawat.pemilik.index') }}" class="btn btn-success mb-2 w-100">
                            Lihat Pemilik
                        </a>

                        <a href="{{ route('perawat.jenis-hewan.index') }}" class="btn btn-warning mb-2 w-100">
                            Lihat Jenis Hewan
                        </a>

                        <a href="{{ route('perawat.ras-hewan.index') }}" class="btn btn-info mb-2 w-100">
                            Lihat Ras Hewan
                        </a>

                        <a href="{{ route('perawat.tindakan.index') }}" class="btn btn-danger mb-2 w-100">
                            Lihat Data Kode Tindakan & Terapi
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
