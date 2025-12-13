@extends('layouts.lteperawat.main')

@section('title', 'Edit Rekam Medis')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Rekam Medis</h1>
    </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Form Edit Rekam Medis</h3>
    </div>

    <form action="{{ route('perawat.rekam-medis.update', $rekam->idrekam_medis) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">

            <div class="form-group">
                <label>Reservasi Temu Dokter</label>
                <select name="idreservasi_dokter" class="form-control" required>
                    @foreach ($temu as $t)
                        <option value="{{ $t->idreservasi_dokter }}"
                            {{ $rekam->idreservasi_dokter == $t->idreservasi_dokter ? 'selected' : '' }}>
                            {{ $t->pet?->nama }} - {{ $t->idreservasi_dokter }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Dokter Pemeriksa</label>
                <select name="dokter_pemeriksa" class="form-control" required>
                    @foreach ($dokter as $d)
                        <option value="{{ $d->iduser }}"
                            {{ $rekam->dokter_pemeriksa == $d->iduser ? 'selected' : '' }}>
                            {{ $d->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Anamnesa</label>
                <input type="text" name="anamnesa"
                    value="{{ $rekam->anamnesa }}"
                    class="form-control" required>
            </div>

            <div class="form-group">
                <label>Temuan Klinis</label>
                <input type="text" name="temuan_klinis"
                    value="{{ $rekam->temuan_klinis }}"
                    class="form-control">
            </div>

            <div class="form-group">
                <label>Diagnosa</label>
                <input type="text" name="diagnosa"
                    value="{{ $rekam->diagnosa }}"
                    class="form-control" required>
            </div>

        </div>

        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('perawat.rekam-medis.index') }}" class="btn btn-secondary">
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
