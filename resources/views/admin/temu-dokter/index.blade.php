@extends('layouts.lte.main')

@section('title', 'Data Temu Dokter')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Temu Dokter</h3>

        <a href="{{ route('admin.temu-dokter.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Temu Dokter
        </a>
    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Nama Pet</th>
                    <th>Waktu Daftar</th>
                    <th>Status</th>
                    <th>Nama Dokter</th>
                    <th>No Urut</th>
                    <th>Nama Pemilik</th>
                    <th style="width: 160px;">Aksi</th>
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
                        <a href="{{ route('admin.temu-dokter.edit', $item->idreservasi_dokter) }}"
                        class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.temu-dokter.destroy', $item->idreservasi_dokter) }}"
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
