@extends('layouts.app')

@section('title', 'Edit Jenis Hewan')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h5>Edit Jenis Hewan</h5>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.jenis-hewan.update', $jenis->idjenis_hewan) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label>Nama Jenis Hewan</label>
                            <input type="text" name="nama_jenis_hewan"
                                value="{{ old('nama_jenis_hewan', $jenis->nama_jenis_hewan) }}"
                                class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.jenis-hewan.index') }}" class="btn btn-secondary">
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
