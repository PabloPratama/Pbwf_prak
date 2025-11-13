@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} {{ session('user_name') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} **{{ session('user_role_name') }}**
                    
                    <div class="mt-4">
                        <p>Menu Administrasi:</p>

                        <a href="{{ route('admin.jenis-hewan.index') }}" class="btn btn-primary mb-2 w-100">
                            Lihat Data Jenis Hewan
                        </a>
                        <a href="{{ route('admin.pemilik.index') }}" class="btn btn-success mb-2 w-100">
                            Lihat Data Pemilik
                        </a>
                        <a href="{{ route('admin.user.index') }}" class="btn btn-warning mb-2 w-100">
                            LIhat Data User
                        </a>
                        <a href="{{ route('admin.role.index') }}" class="btn btn-info mb-2 w-100">
                            Lihat Data Role
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
