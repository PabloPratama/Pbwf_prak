@extends('layouts.app')

@section('title', 'Edit Pemilik')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h5>Edit Pemilik</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.pemilik.update', $pemilik->idpemilik) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label>Nama Pemilik</label>
                            <input type="text" name="nama"
                                value="{{ old('nama', $pemilik->user->nama) }}"
                                class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>No WA</label>
                            <input type="text" name="no_wa"
                                value="{{ old('no_wa', $pemilik->no_wa) }}"
                                class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" required>{{ old('alamat', $pemilik->alamat) }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.pemilik.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
