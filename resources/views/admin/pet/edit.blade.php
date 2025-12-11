@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Pet</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.pet.update', $pet->idpet) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Pet</label>
                <input type="text" name="nama" class="form-control" value="{{ $pet->nama }}" required>
            </div>

            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pet->tanggal_lahir }}" required>
            </div>

            <div class="mb-3">
                <label>Warna Tanda</label>
                <input type="text" name="warna_tanda" class="form-control" value="{{ $pet->warna_tanda }}" required>
            </div>

            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="L" {{ $pet->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $pet->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Pemilik</label>
                <select name="idpemilik" class="form-control" required>
                    @foreach ($pemilik as $p)
                        <option value="{{ $p->idpemilik }}" {{ $pet->idpemilik == $p->idpemilik ? 'selected' : '' }}>
                            {{ $p->user->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Ras Hewan</label>
                <select name="idras_hewan" class="form-control" required>
                    @foreach ($ras as $r)
                        <option value="{{ $r->idras_hewan }}" {{ $pet->idras_hewan == $r->idras_hewan ? 'selected' : '' }}>
                            {{ $r->nama_ras }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.pet.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
