@extends('layouts.lteperawat.main')

@section('title', 'Data Tindakan & Terapi')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Tindakan & Terapi</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width:60px">No</th>
                    <th>Kode</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Kategori Klinis</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($kodeTindakan as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->deskripsi_tindakan_terapi }}</td>
                    <td>{{ $item->kategori?->nama_kategori ?? 'N/A' }}</td>
                    <td>{{ $item->kategoriKlinis?->nama_kategori_klinis ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
