@extends('layouts.lteperawat.main')

@section('title', 'Data Jenis Hewan')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Jenis Hewan</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width:60px">No</th>
                    <th>Nama Jenis Hewan</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($jenisHewan as $index => $hewan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $hewan->nama_jenis_hewan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
