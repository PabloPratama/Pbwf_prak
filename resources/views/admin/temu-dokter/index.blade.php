@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('admin.temu-dokter.create') }}" class="btn btn-primary">
        Tambah Temu Dokter
    </a>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pet</th>
            <th>Waktu Daftar</th>
            <th>Status</th>
            <th>Nama Dokter</th>
            <th>No Urut</th>
            <th>Nama Pemilik</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($temu as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->pet?->nama ?? '-' }}</td>
            <td>{{ $item->waktu_daftar }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->roleDokter?->user?->nama ?? '-' }}</td>
            <td>{{ $item->no_urut }}</td>
            <td>{{ $item->pet?->pemilik?->user?->nama ?? '-' }}</td>
            <td>
                <a href="{{ route('admin.temu-dokter.edit', $item->idreservasi_dokter) }}" class="btn btn-sm btn-warning">
                    Edit
                </a>

                <form action="{{ route('admin.temu-dokter.destroy', $item->idreservasi_dokter) }}"
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
