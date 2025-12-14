@extends('layouts.ltedokter.main')

@section('title', 'Data Dokter')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Dokter</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width:60px">No</th>
                    <th>Nama Dokter</th>
                    <th>Bidang Dokter</th>
                    <th>Jenis Kelamin</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($dokter as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->user?->nama ?? '-' }}</td>
                        <td>{{ $item->bidang_dokter }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data dokter belum tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
