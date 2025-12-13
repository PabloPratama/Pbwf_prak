@extends('layouts.ltedokter.main')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Kategori</h3>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Nama Kategori</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($kategori as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama_kategori }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
