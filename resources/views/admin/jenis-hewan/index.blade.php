@extends('layouts.lte.main')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Jenis Hewan</h3>
        <a href="{{ route('admin.jenis-hewan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Jenis Hewan
        </a>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Nama Jenis Hewan</th>
                    <th style="width: 200px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($jenisHewan as $index => $hewan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $hewan->nama_jenis_hewan }}</td>
                    <td>

                        <a href="{{ route('admin.jenis-hewan.edit', $hewan->idjenis_hewan) }}"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.jenis-hewan.destroy', $hewan->idjenis_hewan) }}"
                            method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="btn btn-danger btn-sm"
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
