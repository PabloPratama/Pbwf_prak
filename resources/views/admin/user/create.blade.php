@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
<div class="card-header"><h5>Tambah User</h5></div>
<div class="card-body">

<form action="{{ route('admin.user.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
</div>

<div class="mb-3">
    <label>Role</label>
    <select name="idrole" class="form-control" required>
        @foreach($roles as $role)
            <option value="{{ $role->idrole }}">{{ $role->nama_role }}</option>
        @endforeach
    </select>
</div>

<div class="d-flex justify-content-between">
    <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

</form>
</div></div></div>
@endsection
