@extends('layouts.lte.main')

@section('title', 'Edit Tindakan Terapi')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Tindakan Terapi</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning">

            <div class="card-header">
                <h3 class="card-title">Form Edit Tindakan Terapi</h3>
            </div>

            <form action="{{ route('admin.tindakan-terapi.update', $tindakan->idkode_tindakan_terapi) }}"
                method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control"
                            value="{{ $tindakan->kode }}">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Tindakan</label>
                        <textarea name="deskripsi_tindakan_terapi"
                                class="form-control"
                                required>{{ $tindakan->deskripsi_tindakan_terapi }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="idkategori" class="form-control" required>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->idkategori }}"
                                    {{ $tindakan->idkategori == $k->idkategori ? 'selected' : '' }}>
                                    {{ $k->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kategori Klinis</label>
                        <select name="idkategori_klinis" class="form-control" required>
                            @foreach ($kategoriKlinis as $kk)
                                <option value="{{ $kk->idkategori_klinis }}"
                                    {{ $tindakan->idkategori_klinis == $kk->idkategori_klinis ? 'selected' : '' }}>
                                    {{ $kk->nama_kategori_klinis }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.tindakan-terapi.index') }}" class="btn btn-secondary">
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
