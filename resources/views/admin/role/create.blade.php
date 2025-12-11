@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Role</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.role.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Role</label>
                <input type="text" name="nama_role" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.role.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
