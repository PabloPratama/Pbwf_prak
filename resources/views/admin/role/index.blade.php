@extends('layouts.lte.main')

@section('title', 'Data Role')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Role</h3>

        <a href="{{ route('admin.role.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Role
        </a>
    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Nama Role</th>
                    <th style="width: 160px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($role as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_role }}</td>

                    <td>
                        <a href="{{ route('admin.role.edit', $item->idrole) }}"
                        class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.role.destroy', $item->idrole) }}"
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
