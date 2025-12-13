@extends('layouts.ltepemilik.main')

@section('title', 'Data Pemilik')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pemilik</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="60">No</th>
                    <th>Nama Pemilik</th>
                    <th>No WhatsApp</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemilik as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->user?->nama }}</td>
                    <td>{{ $item->no_wa }}</td>
                    <td>{{ $item->alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
