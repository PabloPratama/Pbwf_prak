@extends('layouts.lte.main')

@section('title', 'Edit Temu Dokter')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Temu Dokter</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Temu Dokter</h3>
            </div>

            <form action="{{ route('admin.temu-dokter.update', $temu->idreservasi_dokter) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>No Urut</label>
                        <input type="number"
                            name="no_urut"
                            value="{{ $temu->no_urut }}"
                            class="form-control"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="S" {{ $temu->status == 'S' ? 'selected' : '' }}>Selesai</option>
                            <option value="W" {{ $temu->status == 'W' ? 'selected' : '' }}>Waiting</option>
                        </select>
                    </div>

                    <div class="form-group">
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

                    <div class="form-group">
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

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.temu-dokter.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                    <button class="btn btn-warning text-white">
                        <i class="fas fa-save"></i> Perbarui
                    </button>
                </div>

            </form>

        </div>

    </div>
</section>

@endsection
