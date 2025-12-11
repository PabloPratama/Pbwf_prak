@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Detail Rekam Medis</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('dokter.detail-rekam-medis.update', $detail->iddetail_rekam_medis) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Rekam Medis</label>
                <select name="idrekam_medis" class="form-control" required>
                    @foreach ($rekam as $r)
                        <option value="{{ $r->idrekam_medis }}"
                            {{ $detail->idrekam_medis == $r->idrekam_medis ? 'selected' : '' }}>
                            {{ $r->temuDokter?->pet?->nama }} - (ID RM: {{ $r->idrekam_medis }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Tindakan Terapi</label>
                <select name="idkode_tindakan_terapi" class="form-control" required>
                    @foreach ($tindakan as $t)
                        <option value="{{ $t->idkode_tindakan_terapi }}"
                            {{ $detail->idkode_tindakan_terapi == $t->idkode_tindakan_terapi ? 'selected' : '' }}>
                            {{ $t->kode }} - {{ $t->deskripsi_tindakan_terapi }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Keterangan Detail</label>
                <textarea name="detail" class="form-control">{{ $detail->detail }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('dokter.detail-rekam-medis.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button class="btn btn-primary">Perbarui</button>
            </div>

        </form>
    </div>
</div>
@endsection
