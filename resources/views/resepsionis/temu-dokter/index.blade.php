@extends('layouts.lteresepsionis.main')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Data Temu Dokter</h3>
        <a href="{{ route('resepsionis.temu-dokter.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Temu Dokter
        </a>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="60">No</th>
                    <th>Nama Pet</th>
                    <th>Waktu Daftar</th>
                    <th>Status</th>
                    <th>Dokter</th>
                    <th>No Urut</th>
                    <th>Pemilik</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($temu as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->pet?->nama ?? '-' }}</td>
                    <td>{{ $item->waktu_daftar }}</td>
                    <td>
                        <span class="badge {{ $item->status == 'S' ? 'bg-success' : 'bg-warning' }}">
                            {{ $item->status == 'S' ? 'Selesai' : 'Waiting' }}
                        </span>
                    </td>
                    <td>{{ $item->roleDokter?->user?->nama ?? '-' }}</td>
                    <td>{{ $item->no_urut ?? '-' }}</td>
                    <td>{{ $item->pet?->pemilik?->user?->nama ?? '-' }}</td>
                    <td>
                        <a href="{{ route('resepsionis.temu-dokter.edit', $item->idreservasi_dokter) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('resepsionis.temu-dokter.destroy', $item->idreservasi_dokter) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin hapus data?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center text-muted">
                        Data temu dokter belum tersedia
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
