@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Detail Rekam Medis</h5>
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

        <form action="{{ route('admin.detail-rekam-medis.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Rekam Medis</label>
                <select name="idrekam_medis" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    @foreach ($rekam as $r)
                        <option value="{{ $r->idrekam_medis }}">
                            {{ $r->temuDokter?->pet?->nama }} - (ID RM: {{ $r->idrekam_medis }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Tindakan Terapi</label>
                <select name="idkode_tindakan_terapi" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    @foreach ($tindakan as $t)
                        <option value="{{ $t->idkode_tindakan_terapi }}">
                            {{ $t->kode }} - {{ $t->deskripsi_tindakan_terapi }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Keterangan Detail</label>
                <textarea name="detail" class="form-control"></textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.detail-rekam-medis.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
</div>
@endsection
