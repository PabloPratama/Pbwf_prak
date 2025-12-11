@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('admin.tindakan-terapi.create') }}" class="btn btn-primary">
        Tambah Tindakan
    </a>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Kategori Klinis</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($kodeTindakan as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->kode }}</td>
            <td>{{ $item->deskripsi_tindakan_terapi }}</td>
            <td>{{ $item->kategori?->nama_kategori ?? '-' }}</td>
            <td>{{ $item->kategoriKlinis?->nama_kategori_klinis ?? '-' }}</td>
            <td>
                <a href="{{ route('admin.tindakan-terapi.edit', $item->idkode_tindakan_terapi) }}" class="btn btn-sm btn-warning">
                    Edit
                </a>

                <form action="{{ route('admin.tindakan-terapi.destroy', $item->idkode_tindakan_terapi) }}"
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
