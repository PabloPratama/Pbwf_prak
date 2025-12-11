@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('perawat.rekam-medis.create') }}" class="btn btn-primary">
        Tambah Rekam Medis
    </a>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
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
            <th width="160">Aksi</th>
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
                <a href="{{ route('perawat.rekam-medis.edit', $item->idrekam_medis) }}"
                    class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('perawat.rekam-medis.destroy', $item->idrekam_medis) }}"
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
