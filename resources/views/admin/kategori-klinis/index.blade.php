@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('admin.kategori-klinis.create') }}" class="btn btn-primary">
        Tambah Kategori Klinis
    </a>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori Klinis</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategoriKlinis as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->nama_kategori_klinis }}</td>
            <td>
                <a href="{{ route('admin.kategori-klinis.edit', $item->idkategori_klinis) }}"
                class="btn btn-sm btn-warning">
                    Edit
                </a>

                <form action="{{ route('admin.kategori-klinis.destroy', $item->idkategori_klinis) }}"
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
