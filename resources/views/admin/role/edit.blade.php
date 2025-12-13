@extends('layouts.lte.main')

@section('title', 'Edit Role')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Role</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Role</h3>
            </div>

            <form action="{{ route('admin.role.update', $role->idrole) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Role</label>
                        <input type="text"
                            name="nama_role"
                            value="{{ old('nama_role', $role->nama_role) }}"
                            class="form-control"
                            required>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.role.index') }}" class="btn btn-secondary">
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
