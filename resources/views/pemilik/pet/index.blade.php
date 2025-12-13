@extends('layouts.ltepemilik.main')

@section('title', 'Data Pet')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pet</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="60">No</th>
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
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->rasHewan?->nama_ras ?? 'N/A' }}</td>
                    <td>{{ $item->pemilik?->user?->nama ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
