@extends('layouts.app')

@section('content')
<div class="mb-3">
    <form action="{{ route('admin.role.create') }}" method="GET" style="display: inline;">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Role
        </button>
    </form>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Role</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($role as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->nama_role }}</td>
            <td>
                <a href="{{ route('admin.role.edit', $item->idrole) }}" class="btn btn-sm btn-warning">
                    Edit
                </a>

                <button type="button" class="btn btn-sm btn-danger"
                    onclick="if(confirm('Yakin ingin menghapus data ini?')) {
                        document.getElementById('delete-form-{{ $item->idrole }}').submit();
                    }">
                    Hapus
                </button>

                <form id="delete-form-{{ $item->idrole }}"
                    action="{{ route('admin.role.destroy', $item->idrole) }}"
                    method="POST"
                    style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
