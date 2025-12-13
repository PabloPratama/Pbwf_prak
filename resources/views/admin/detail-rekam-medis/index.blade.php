@extends('layouts.lte.main')

@section('title', 'Detail Rekam Medis')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Detail Rekam Medis</h3>

        <a href="{{ route('admin.detail-rekam-medis.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Detail
        </a>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>ID Hewan</th>
                    <th>Nama Hewan</th>
                    <th>Nama Pemilik</th>
                    <th>Dokter Pemeriksa</th>
                    <th>Kode</th>
                    <th>Tindakan</th>
                    <th>Keterangan</th>
                    <th style="width:150px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($detail as $index => $item)
                    @php
                        $rekam = $item->rekamMedis;
                        $temu = $rekam?->temuDokter;
                        $pet = $temu?->pet;
                        $owner = $pet?->pemilik?->user;
                    @endphp

                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $pet?->idpet ?? '-' }}</td>
                        <td>{{ $pet?->nama ?? '-' }}</td>
                        <td>{{ $owner?->nama ?? '-' }}</td>
                        <td>{{ $rekam?->dokter?->nama ?? '-' }}</td>
                        <td>{{ $item->tindakan?->kode ?? '-' }}</td>
                        <td>{{ $item->tindakan?->deskripsi_tindakan_terapi ?? '-' }}</td>
                        <td>{{ $item->detail }}</td>

                        <td>
                            <a href="{{ route('admin.detail-rekam-medis.edit', $item->iddetail_rekam_medis) }}"
                                class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.detail-rekam-medis.destroy', $item->iddetail_rekam_medis) }}"
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
