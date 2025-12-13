@extends('layouts.lte.main')

@section('title', 'Data User')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data User</h3>

        <a href="{{ route('admin.user.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah User
        </a>
    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-bordered table-striped">

            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="width: 160px;">Aksi</th>
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
                        <a href="{{ route('admin.user.edit', $user->iduser) }}"
                        class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.user.destroy', $user->iduser) }}"
                            method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>

                </tr>
                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection
