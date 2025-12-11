@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('admin.ras-hewan.create') }}" class="btn btn-primary">
        Tambah Ras Hewan
    </a>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ras Hewan</th>
            <th>Jenis Hewan</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($ras as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_ras }}</td>
                <td>{{ $item->jenisHewan?->nama_jenis_hewan ?? '-' }}</td>
                <td>
                    <a href="{{ route('admin.ras-hewan.edit', $item->idras_hewan) }}"
                    class="btn btn-sm btn-warning">
                        Edit
                    </a>

                    <form action="{{ route('admin.ras-hewan.destroy', $item->idras_hewan) }}"
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
