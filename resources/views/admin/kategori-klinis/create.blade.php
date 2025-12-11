@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Kategori Klinis</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.kategori-klinis.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Kategori Klinis</label>
                <input type="text" name="nama_kategori_klinis" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.kategori-klinis.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
