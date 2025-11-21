@extends('layouts.app')

@section('title', 'Tambah Pemilik')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Pemilik</h5>
                </div>

                <div class="card-body">

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.pemilik.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Pemilik <span class="text-danger">*</span></label>
                            <input type="text"
                                name="nama"
                                class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Masukkan nama pemilik"
                                required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No WA <span class="text-danger">*</span></label>
                            <input type="text"
                                name="no_wa"
                                class="form-control @error('no_wa') is-invalid @enderror"
                                placeholder="Masukkan nomor WhatsApp"
                                required>
                            @error('no_wa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat <span class="text-danger">*</span></label>
                            <textarea
                                name="alamat"
                                class="form-control @error('alamat') is-invalid @enderror"
                                placeholder="Masukkan alamat"
                                required></textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.pemilik.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>

                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
