@extends('layouts.lte.main')

@section('title', 'Tambah Jenis Hewan')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Jenis Hewan</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Jenis Hewan</h3>
            </div>

            <form action="{{ route('admin.jenis-hewan.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="nama_jenis_hewan">
                            Nama Jenis Hewan <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                            class="form-control @error('nama_jenis_hewan') is-invalid @enderror"
                            name="nama_jenis_hewan"
                            id="nama_jenis_hewan"
                            value="{{ old('nama_jenis_hewan') }}"
                            placeholder="Masukkan nama jenis hewan"
                            required>

                        @error('nama_jenis_hewan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.jenis-hewan.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>

            </form>

        </div>

    </div>
</section>

@endsection
