@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('admin.pet.create') }}" class="btn btn-primary">
        Tambah Pet
    </a>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pet</th>
            <th>Tanggal Lahir</th>
            <th>Warna Tanda</th>
            <th>Jenis Kelamin</th>
            <th>Ras</th>
            <th>Pemilik</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pet as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->tanggal_lahir }}</td>
            <td>{{ $item->warna_tanda }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->rasHewan?->nama_ras ?? '-' }}</td>
            <td>{{ $item->pemilik?->user?->nama ?? '-' }}</td>

            <td>
                <a href="{{ route('admin.pet.edit', $item->idpet) }}" 
                class="btn btn-sm btn-warning">
                    Edit
                </a>

                <form action="{{ route('admin.pet.destroy', $item->idpet) }}" 
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
