@extends('layouts.lte.main')

@section('title', 'Tambah Pemilik')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Pemilik</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Pemilik</h3>
            </div>

            <form action="{{ route('admin.pemilik.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="form-group">
                        <label>Nama Pemilik <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            placeholder="Masukkan nama pemilik" required>
                        @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>No WA <span class="text-danger">*</span></label>
                        <input type="text" name="no_wa" class="form-control @error('no_wa') is-invalid @enderror"
                            placeholder="Masukkan nomor WhatsApp" required>
                        @error('no_wa') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Alamat <span class="text-danger">*</span></label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                            placeholder="Masukkan alamat" required></textarea>
                        @error('alamat') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.pemilik.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>

            </form>
        </div>

    </div>
</section>

@endsection
