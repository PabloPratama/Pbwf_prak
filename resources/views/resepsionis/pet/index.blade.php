@extends('layouts.lteresepsionis.main')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Pet</h3>
        <a href="{{ route('resepsionis.pet.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pet
        </a>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="60">No</th>
                    <th>Nama Pet</th>
                    <th>Tanggal Lahir</th>
                    <th>Warna Tanda</th>
                    <th>Jenis Kelamin</th>
                    <th>Ras</th>
                    <th>Pemilik</th>
                    <th width="180">Aksi</th>
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
                        <a href="{{ route('resepsionis.pet.edit', $item->idpet) }}"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('resepsionis.pet.destroy', $item->idpet) }}"
                            method="POST" style="display:inline;">
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
