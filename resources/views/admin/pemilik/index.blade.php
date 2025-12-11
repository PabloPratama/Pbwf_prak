@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('admin.pemilik.create') }}" class="btn btn-primary">
        Tambah Pemilik
    </a>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemilik</th>
            <th>No WA</th>
            <th>Alamat</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pemilik as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->user?->nama }}</td>
            <td>{{ $item->no_wa }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <a href="{{ route('admin.pemilik.edit', $item->idpemilik) }}"
                class="btn btn-sm btn-warning">
                    Edit
                </a>
                <form action="{{ route('admin.pemilik.destroy', $item->idpemilik) }}"
                    method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
