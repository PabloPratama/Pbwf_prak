@extends('layouts.lte.main')

@section('title', 'Edit Ras Hewan')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Ras Hewan</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Ras Hewan</h3>
            </div>

            <form action="{{ route('admin.ras-hewan.update', $ras->idras_hewan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Ras Hewan</label>
                        <input type="text"
                            name="nama_ras"
                            class="form-control"
                            value="{{ old('nama_ras', $ras->nama_ras) }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Hewan</label>
                        <select name="idjenis_hewan" class="form-control" required>
                            @foreach ($jenis as $j)
                                <option value="{{ $j->idjenis_hewan }}"
                                    {{ $ras->idjenis_hewan == $j->idjenis_hewan ? 'selected' : '' }}>
                                    {{ $j->nama_jenis_hewan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.ras-hewan.index') }}" class="btn btn-secondary">
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
