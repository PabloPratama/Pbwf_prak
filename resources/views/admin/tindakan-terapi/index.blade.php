@extends('layouts.lte.main')

@section('title', 'Data Tindakan Terapi')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Tindakan Terapi</h3>
        <a href="{{ route('admin.tindakan-terapi.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Tindakan
        </a>
    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-bordered table-striped">

            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Kode</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Kategori Klinis</th>
                    <th style="width: 160px;">Aksi</th>
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
                        <a href="{{ route('admin.tindakan-terapi.edit', $item->idkode_tindakan_terapi) }}"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.tindakan-terapi.destroy', $item->idkode_tindakan_terapi) }}"
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
