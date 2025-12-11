@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Temu Dokter</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.temu-dokter.update', $temu->idreservasi_dokter) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>No Urut</label>
                <input type="number" name="no_urut" class="form-control"
                    value="{{ $temu->no_urut }}" required>
            </div>

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="S" {{ $temu->status == 'S' ? 'selected' : '' }}>Selesai</option>
                    <option value="W" {{ $temu->status == 'W' ? 'selected' : '' }}>Waiting</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Pet</label>
                <select name="idpet" class="form-control" required>
                    @foreach ($pet as $p)
                        <option value="{{ $p->idpet }}"
                            {{ $temu->idpet == $p->idpet ? 'selected' : '' }}>
                            {{ $p->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Dokter</label>
                <select name="idrole_user" class="form-control" required>
                    @foreach ($dokter as $d)
                        <option value="{{ $d->idrole_user }}"
                            {{ $temu->idrole_user == $d->idrole_user ? 'selected' : '' }}>
                            {{ $d->user?->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.temu-dokter.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>
</div>
@endsection
