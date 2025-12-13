@extends('layouts.lte.main')

@section('title', 'Kategori')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Kategori</h3>

        <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Kategori
        </a>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th style="width:150px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($kategori as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('admin.kategori.edit', $item->idkategori) }}"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit </a>

                        <form action="{{ route('admin.kategori.destroy', $item->idkategori) }}"
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
