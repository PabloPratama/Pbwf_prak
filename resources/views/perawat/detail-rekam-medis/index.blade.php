@extends('layouts.lteperawat.main')

@section('title', 'Detail Rekam Medis')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail Rekam Medis</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width:60px">No</th>
                    <th>ID Hewan</th>
                    <th>Nama Hewan</th>
                    <th>Nama Pemilik</th>
                    <th>Dokter Pemeriksa</th>
                    <th>Kode Tindakan</th>
                    <th>Tindakan Terapi</th>
                    <th>Keterangan</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
