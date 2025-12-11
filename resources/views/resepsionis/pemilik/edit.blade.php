@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Edit Pemilik</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('resepsionis.pemilik.update', $pemilik->idpemilik) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Pemilik</label>
                <input type="text" name="nama"
                    class="form-control"
                    value="{{ old('nama', $pemilik->user->nama) }}" required>
            </div>

            <div class="mb-3">
                <label>No WA</label>
                <input type="text" name="no_wa"
                    class="form-control"
                    value="{{ old('no_wa', $pemilik->no_wa) }}" required>
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ old('alamat', $pemilik->alamat) }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('resepsionis.pemilik.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-primary">Perbarui</button>
            </div>

        </form>
    </div>

</div>

@endsection
