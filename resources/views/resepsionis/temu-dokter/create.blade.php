@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Tambah Temu Dokter</h5>
    </div>

    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('resepsionis.temu-dokter.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>No Urut</label>
                <input type="number" name="no_urut" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="S">Selesai</option>
                    <option value="W">Waiting</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Pet</label>
                <select name="idpet" class="form-control" required>
                    @foreach ($pet as $p)
                        <option value="{{ $p->idpet }}">
                            {{ $p->nama }} - {{ $p->pemilik?->user?->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Dokter</label>
                <select name="idrole_user" class="form-control" required>
                    @foreach ($dokter as $d)
                        <option value="{{ $d->idrole_user }}">
                            {{ $d->user?->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('resepsionis.temu-dokter.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
</div>

@endsection
