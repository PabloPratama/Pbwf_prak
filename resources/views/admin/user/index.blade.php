@extends('layouts.app')

@section('content')
<div class="mb-3">
    <form action="{{ route('admin.user.create') }}" method="GET" style="display:inline;">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah User
        </button>
    </form>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $index => $user)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @foreach ($user->roleUser as $role)
                    {{ $role->nama_role }}
                @endforeach
            </td>
            <td>
                <a href="{{ route('admin.user.edit', $user->iduser) }}" class="btn btn-sm btn-warning">Edit</a>

                <button class="btn btn-sm btn-danger"
                    onclick="if(confirm('Yakin hapus?')) document.getElementById('delete-{{ $user->iduser }}').submit();">
                    Hapus
                </button>

                <form id="delete-{{ $user->iduser }}" action="{{ route('admin.user.destroy', $user->iduser) }}" method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
