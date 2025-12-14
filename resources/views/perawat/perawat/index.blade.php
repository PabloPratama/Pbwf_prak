@extends('layouts.lteperawat.main')

@section('title', 'Data Perawat')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Perawat</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width:60px">No</th>
                    <th>Nama Perawat</th>
                    <th>Jenis Kelamin</th>
                    <th>Pendidikan</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($perawat as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->user?->nama ?? '-' }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->pendidikan }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data perawat belum tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
