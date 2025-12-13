@extends('layouts.lte.main')

@section('title', 'Edit Pet')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Pet</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Pet</h3>
            </div>

            <form action="{{ route('admin.pet.update', $pet->idpet) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Pet</label>
                        <input type="text" name="nama" value="{{ $pet->nama }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ $pet->tanggal_lahir }}"
                            class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Warna Tanda</label>
                        <input type="text" name="warna_tanda" value="{{ $pet->warna_tanda }}"
                            class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="L" {{ $pet->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $pet->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pemilik</label>
                        <select name="idpemilik" class="form-control" required>
                            @foreach ($pemilik as $p)
                                <option value="{{ $p->idpemilik }}"
                                    {{ $pet->idpemilik == $p->idpemilik ? 'selected' : '' }}>
                                    {{ $p->user->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Ras Hewan</label>
                        <select name="idras_hewan" class="form-control" required>
                            @foreach ($ras as $r)
                                <option value="{{ $r->idras_hewan }}"
                                    {{ $pet->idras_hewan == $r->idras_hewan ? 'selected' : '' }}>
                                    {{ $r->nama_ras }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.pet.index') }}" class="btn btn-secondary">
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
