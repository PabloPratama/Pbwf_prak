@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Rekam Medis</h5>
    </div>

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

        <form action="{{ route('perawat.rekam-medis.store') }}" method="POST">
            @csrf

            <div class="mb-3">
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

            <div class="mb-3">
                <label>Dokter Pemeriksa</label>
                <select name="dokter_pemeriksa" class="form-control" required>
                    @foreach ($dokter as $d)
                        <option value="{{ $d->iduser }}">{{ $d->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Anamnesa</label>
                <input type="text" name="anamnesa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Temuan Klinis</label>
                <input type="text" name="temuan_klinis" class="form-control">
            </div>

            <div class="mb-3">
                <label>Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('perawat.rekam-medis.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
</div>
@endsection
