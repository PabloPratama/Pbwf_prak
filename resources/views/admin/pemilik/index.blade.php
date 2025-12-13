@extends('layouts.lte.main')

@section('title', 'Data Pemilik')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Pemilik</h3>
        <a href="{{ route('admin.pemilik.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pemilik
        </a>
    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Nama Pemilik</th>
                    <th>No WA</th>
                    <th>Alamat</th>
                    <th width="180">Aksi</th>
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
                        <a href="{{ route('admin.pemilik.edit', $item->idpemilik) }}"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.pemilik.destroy', $item->idpemilik) }}"
                            method="POST"
                            style="display:inline;">
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
