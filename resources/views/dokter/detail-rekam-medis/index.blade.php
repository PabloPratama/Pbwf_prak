@extends('layouts.app')

@section('content')

<div class="mb-3">
    <a href="{{ route('dokter.detail-rekam-medis.create') }}" class="btn btn-primary">
        Tambah Detail Rekam Medis
    </a>
</div>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Hewan</th>
            <th>Nama Hewan</th>
            <th>Nama Pemilik</th>
            <th>Dokter Pemeriksa</th>
            <th>Kode Tindakan</th>
            <th>Tindakan Terapi</th>
            <th>Keterangan Detail</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($detail as $index => $item)
            @php
                $rekam = $item->rekamMedis;
                $temu  = $rekam?->temuDokter;
                $pet   = $temu?->pet;
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
                    <a href="{{ route('dokter.detail-rekam-medis.edit', $item->iddetail_rekam_medis) }}"
                        class="btn btn-warning btn-sm">
                        Edit
                    </a>
                    <form action="{{ route('dokter.detail-rekam-medis.destroy', $item->iddetail_rekam_medis) }}"
                        method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
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
