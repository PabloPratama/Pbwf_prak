@extends('layouts.app')

@section('content')
<div class="mb-3">
    <!-- Tombol Tambah Pemilik -->
    <form action="{{ route('admin.pemilik.create') }}" method="GET" style="display: inline;">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pemilik
        </button>
    </form>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemilik</th>
            <th>No WA</th>
            <th>Alamat</th>
            <th>Aksi</th>
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

                <button type="button" class="btn btn-sm btn-warning" onclick="window.location='#'">
                    <i class="fas fa-edit"></i> Edit
                </button>

                <button type="button" class="btn btn-sm btn-danger"
                    onclick="if(confirm('Yakin ingin menghapus data ini?')) { document.getElementById('delete-form-{{ $item->idpemilik }}').submit(); }">
                    <i class="fas fa-trash"></i> Hapus
                </button>

                <form id="delete-form-{{ $item->idpemilik }}" action="#" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
