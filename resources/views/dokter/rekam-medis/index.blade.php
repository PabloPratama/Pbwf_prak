@extends('layouts.ltedokter.main')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Rekam Medis</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width:60px">No</th>
                    <th>Tanggal</th>
                    <th>Anamnesa</th>
                    <th>Temuan Klinis</th>
                    <th>Diagnosa</th>
                    <th>Nama Pet</th>
                    <th>Nama Pemilik</th>
                    <th>Dokter Pemeriksa</th>
                    <th>ID Reservasi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rekam as $index => $item)
                    @php
                        $temu = $item->temuDokter;
                        $pet = $temu?->pet;
                        $owner = $pet?->pemilik?->user;
                    @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->anamnesa }}</td>
                    <td>{{ $item->temuan_klinis ?? '-' }}</td>
                    <td>{{ $item->diagnosa }}</td>
                    <td>{{ $pet?->nama ?? '-' }}</td>
                    <td>{{ $owner?->nama ?? '-' }}</td>
                    <td>{{ $item->dokter?->nama ?? '-' }}</td>
                    <td>{{ $item->idreservasi_dokter ?? '-' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
