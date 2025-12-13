@extends('layouts.lte.main')

@section('title', 'Tambah Pet')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Pet</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Pet</h3>
            </div>

            <form action="{{ route('admin.pet.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Pet</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Warna Tanda</label>
                        <input type="text" name="warna_tanda" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pemilik</label>
                        <select name="idpemilik" class="form-control" required>
                            @foreach ($pemilik as $p)
                                <option value="{{ $p->idpemilik }}">{{ $p->user->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Ras Hewan</label>
                        <select name="idras_hewan" class="form-control" required>
                            @foreach ($ras as $r)
                                <option value="{{ $r->idras_hewan }}">{{ $r->nama_ras }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.pet.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>

            </form>

        </div>

    </div>
</section>

@endsection
