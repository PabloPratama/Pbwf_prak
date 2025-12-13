@extends('layouts.lte.main')

@section('title', 'Edit Jenis Hewan')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Jenis Hewan</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Jenis Hewan</h3>
            </div>

            <form action="{{ route('admin.jenis-hewan.update', $jenis->idjenis_hewan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label for="nama_jenis_hewan">Nama Jenis Hewan</label>
                        <input type="text"
                            name="nama_jenis_hewan"
                            id="nama_jenis_hewan"
                            class="form-control"
                            value="{{ old('nama_jenis_hewan', $jenis->nama_jenis_hewan) }}"
                            required>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.jenis-hewan.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-save"></i> Perbarui
                    </button>
                </div>

            </form>

        </div>

    </div>
</section>

@endsection
