@extends('layouts.lte.main')

@section('title', 'Edit User')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit User</h1>
    </div>
</section>

<section class="content">
<div class="container-fluid">

    <div class="card card-warning">

        <div class="card-header">
            <h3 class="card-title">Form Edit User</h3>
        </div>

        <form action="{{ route('admin.user.update', $user->iduser) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $user->nama }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password (isi jika ingin mengganti)</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select name="idrole" class="form-control">
                        @foreach($roles as $role)
                            <option value="{{ $role->idrole }}"
                                {{ $user->roleUser->first()?->idrole == $role->idrole ? 'selected' : '' }}>
                                {{ $role->nama_role }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <button class="btn btn-warning text-white">
                    <i class="fas fa-save"></i> Update
                </button>
            </div>

        </form>

    </div>

</div>
</section>

@endsection
