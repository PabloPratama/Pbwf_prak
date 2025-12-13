@extends('layouts.lteperawat.main')

@section('title', 'Data Pasien')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pasien (Pet)</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width:60px">No</th>
                    <th>Nama Pet</th>
                    <th>Jenis Kelamin</th>
                    <th>Ras Hewan</th>
                    <th>Pemilik</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pet as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ ucfirst($item->jenis_kelamin) }}</td>
                    <td>{{ $item->rasHewan?->nama_ras ?? 'N/A' }}</td>
                    <td>{{ $item->pemilik?->user?->nama ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
