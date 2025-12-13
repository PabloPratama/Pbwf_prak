@extends('layouts.lte.main')

@section('title', 'Data Rekam Medis')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Rekam Medis</h3>

        <a href="{{ route('admin.rekam-medis.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Rekam Medis
        </a>
    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-bordered table-hover table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Waktu Pemeriksaan</th>
                    <th>Anamnesa</th>
                    <th>Temuan Klinis</th>
                    <th>Diagnosa</th>
                    <th>Nama Pet</th>
                    <th>Nama Pemilik</th>
                    <th>Dokter</th>
                    <th>ID Reservasi</th>
                    <th width="150px">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rekam as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i') }}</td>
                    <td>{{ $item->anamnesa }}</td>
                    <td>{{ $item->temuan_klinis ?? '-' }}</td>
                    <td>{{ $item->diagnosa }}</td>
                    <td>{{ $item->temuDokter?->pet?->nama ?? '-' }}</td>
                    <td>{{ $item->temuDokter?->pet?->pemilik?->user?->nama ?? '-' }}</td>
                    <td>{{ $item->dokter?->nama ?? '-' }}</td>
                    <td>{{ $item->idreservasi_dokter }}</td>

                    <td>
                        <a href="{{ route('admin.rekam-medis.edit', $item->idrekam_medis) }}"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.rekam-medis.destroy', $item->idrekam_medis) }}"
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
