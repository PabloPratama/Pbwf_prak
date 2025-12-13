@extends('layouts.lteresepsionis.main')

@section('content')

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Edit Pemilik</h3>
    </div>

    <form action="{{ route('resepsionis.pemilik.update', $pemilik->idpemilik) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">

            <div class="form-group">
                <label>Nama Pemilik</label>
                <input type="text" name="nama"
                    value="{{ old('nama', $pemilik->user->nama) }}"
                    class="form-control" required>
            </div>

            <div class="form-group">
                <label>No WhatsApp</label>
                <input type="text" name="no_wa"
                    value="{{ old('no_wa', $pemilik->no_wa) }}"
                    class="form-control" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat', $pemilik->alamat) }}</textarea>
            </div>

        </div>

        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('resepsionis.pemilik.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <button class="btn btn-warning text-white">
                <i class="fas fa-save"></i> Perbarui
            </button>
        </div>
    </form>
</div>

@endsection
