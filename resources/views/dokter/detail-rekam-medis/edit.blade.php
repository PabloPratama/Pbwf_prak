@extends('layouts.ltedokter.main')

@section('title', 'Edit Detail Rekam Medis')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Detail Rekam Medis</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Detail Rekam Medis</h3>
            </div>

            <form action="{{ route('dokter.detail-rekam-medis.update', $detail->iddetail_rekam_medis) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Rekam Medis</label>
                        <select name="idrekam_medis" class="form-control" required>
                            @foreach ($rekam as $r)
                                <option value="{{ $r->idrekam_medis }}"
                                    {{ $detail->idrekam_medis == $r->idrekam_medis ? 'selected' : '' }}>
                                    {{ $r->temuDokter?->pet?->nama }} (ID RM: {{ $r->idrekam_medis }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
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

                    <div class="form-group">
                        <label>Keterangan Detail</label>
                        <textarea name="detail" class="form-control" rows="3">{{ $detail->detail }}</textarea>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('dokter.detail-rekam-medis.index') }}" class="btn btn-secondary">
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
