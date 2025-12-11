@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Ras Hewan</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.ras-hewan.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Ras Hewan</label>
                <input type="text" name="nama_ras" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Jenis Hewan</label>
                <select name="idjenis_hewan" class="form-control" required>
                    @foreach ($jenis as $j)
                        <option value="{{ $j->idjenis_hewan }}">
                            {{ $j->nama_jenis_hewan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.ras-hewan.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
