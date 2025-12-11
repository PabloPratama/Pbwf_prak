@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Rekam Medis</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('perawat.rekam-medis.update', $rekam->idrekam_medis) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
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

            <div class="mb-3">
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

            <div class="mb-3">
                <label>Anamnesa</label>
                <input type="text" name="anamnesa"
                    value="{{ $rekam->anamnesa }}"
                    class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Temuan Klinis</label>
                <input type="text" name="temuan_klinis"
                    value="{{ $rekam->temuan_klinis }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Diagnosa</label>
                <input type="text" name="diagnosa"
                    value="{{ $rekam->diagnosa }}"
                    class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('perawat.rekam-medis.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-primary">Perbarui</button>
            </div>

        </form>
    </div>
</div>
@endsection
