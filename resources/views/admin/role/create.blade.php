@extends('layouts.lte.main')

@section('title', 'Tambah Role')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Role</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Role</h3>
            </div>

            <form action="{{ route('admin.role.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Role <span class="text-danger">*</span></label>
                        <input type="text"
                            name="nama_role"
                            class="form-control"
                            placeholder="Masukkan nama role"
                            required>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.role.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>

            </form>

        </div>

    </div>
</section>

@endsection
