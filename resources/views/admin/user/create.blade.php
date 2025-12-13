@extends('layouts.lte.main')

@section('title', 'Tambah User')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah User</h1>
    </div>
</section>

<section class="content">
<div class="container-fluid">

    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Form Tambah User</h3>
        </div>

        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control"
                        placeholder="Masukkan nama" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                        placeholder="Masukkan email" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"
                        placeholder="Masukkan password" required>
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select name="idrole" class="form-control" required>
                        @foreach($roles as $role)
                            <option value="{{ $role->idrole }}">{{ $role->nama_role }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">
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
