@extends('layouts.lte.main')

@section('title', 'Tambah Ras Hewan')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Ras Hewan</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Ras Hewan</h3>
            </div>

            <form action="{{ route('admin.ras-hewan.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Ras Hewan <span class="text-danger">*</span></label>
                        <input type="text"
                            name="nama_ras"
                            class="form-control"
                            placeholder="Masukkan nama ras hewan"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Hewan <span class="text-danger">*</span></label>
                        <select name="idjenis_hewan" class="form-control" required>
                            <option value="">-- Pilih Jenis Hewan --</option>
                            @foreach ($jenis as $j)
                                <option value="{{ $j->idjenis_hewan }}">
                                    {{ $j->nama_jenis_hewan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.ras-hewan.index') }}" class="btn btn-secondary">
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
