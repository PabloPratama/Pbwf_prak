@extends('layouts.lteperawat.main')

@section('title', 'Tambah Rekam Medis')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Rekam Medis</h1>
    </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Tambah Rekam Medis</h3>
    </div>

    <form action="{{ route('perawat.rekam-medis.store') }}" method="POST">
        @csrf

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label>Reservasi Temu Dokter</label>
                <select name="idreservasi_dokter" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    @foreach ($temu as $t)
                        <option value="{{ $t->idreservasi_dokter }}">
                            {{ $t->pet?->nama }} - {{ $t->idreservasi_dokter }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Dokter Pemeriksa</label>
                <select name="dokter_pemeriksa" class="form-control" required>
                    @foreach ($dokter as $d)
                        <option value="{{ $d->iduser }}">{{ $d->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Anamnesa</label>
                <input type="text" name="anamnesa" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Temuan Klinis</label>
                <input type="text" name="temuan_klinis" class="form-control">
            </div>

            <div class="form-group">
                <label>Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control" required>
            </div>

        </div>

        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('perawat.rekam-medis.index') }}" class="btn btn-secondary">
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
