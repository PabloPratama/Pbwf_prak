@extends('layouts.lteresepsionis.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Pemilik</h3>
    </div>

    <form action="{{ route('resepsionis.pemilik.store') }}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Nama Pemilik</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label>No WhatsApp</label>
                <input type="text" name="no_wa" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required></textarea>
            </div>

        </div>

        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('resepsionis.pemilik.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <button class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>

@endsection
