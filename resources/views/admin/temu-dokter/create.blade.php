@extends('layouts.lte.main')

@section('title', 'Tambah Temu Dokter')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Temu Dokter</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Temu Dokter</h3>
            </div>

            <form action="{{ route('admin.temu-dokter.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>No Urut <span class="text-danger">*</span></label>
                        <input type="number" name="no_urut" class="form-control"
                            placeholder="Masukkan nomor urut"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Status <span class="text-danger">*</span></label>
                        <select name="status" class="form-control" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="S">Selesai</option>
                            <option value="W">Waiting</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pet <span class="text-danger">*</span></label>
                        <select name="idpet" class="form-control" required>
                            @foreach ($pet as $p)
                                <option value="{{ $p->idpet }}">
                                    {{ $p->nama }} - {{ $p->pemilik?->user?->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Dokter <span class="text-danger">*</span></label>
                        <select name="idrole_user" class="form-control" required>
                            @foreach ($dokter as $d)
                                <option value="{{ $d->idrole_user }}">
                                    {{ $d->user?->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.temu-dokter.index') }}" class="btn btn-secondary">
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
