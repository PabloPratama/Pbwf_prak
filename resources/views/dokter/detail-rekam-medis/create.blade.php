@extends('layouts.ltedokter.main')

@section('title', 'Tambah Detail Rekam Medis')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Detail Rekam Medis</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Detail Rekam Medis</h3>
            </div>

            <form action="{{ route('dokter.detail-rekam-medis.store') }}" method="POST">
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
                        <label>Rekam Medis <span class="text-danger">*</span></label>
                        <select name="idrekam_medis" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            @foreach ($rekam as $r)
                                <option value="{{ $r->idrekam_medis }}">
                                    {{ $r->temuDokter?->pet?->nama }} (ID RM: {{ $r->idrekam_medis }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tindakan Terapi <span class="text-danger">*</span></label>
                        <select name="idkode_tindakan_terapi" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            @foreach ($tindakan as $t)
                                <option value="{{ $t->idkode_tindakan_terapi }}">
                                    {{ $t->kode }} - {{ $t->deskripsi_tindakan_terapi }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Keterangan Detail</label>
                        <textarea name="detail" class="form-control" rows="3"></textarea>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('dokter.detail-rekam-medis.index') }}" class="btn btn-secondary">
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
