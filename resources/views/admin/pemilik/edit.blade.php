@extends('layouts.lte.main')

@section('title', 'Edit Pemilik')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Pemilik</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Pemilik</h3>
            </div>

            <form action="{{ route('admin.pemilik.update', $pemilik->idpemilik) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Pemilik</label>
                        <input type="text" name="nama" class="form-control"
                            value="{{ old('nama', $pemilik->user->nama) }}" required>
                    </div>

                    <div class="form-group">
                        <label>No WA</label>
                        <input type="text" name="no_wa" class="form-control"
                            value="{{ old('no_wa', $pemilik->no_wa) }}" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required>{{ old('alamat', $pemilik->alamat) }}</textarea>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.pemilik.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button class="btn btn-warning text-white">
                        <i class="fas fa-save"></i> Perbarui
                    </button>
                </div>

            </form>

        </div>

    </div>
</section>

@endsection
