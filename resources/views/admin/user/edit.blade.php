@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
<div class="card-header"><h5>Edit User</h5></div>
<div class="card-body">

<form action="{{ route('admin.user.update', $user->iduser) }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $user->nama }}" class="form-control">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
</div>

<div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
</div>

<div class="mb-3">
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

<div class="d-flex justify-content-between">
    <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Update</button>
</div>

</form>
</div></div></div>
@endsection
