@extends('layouts.lte.main')

@section('title', 'Tambah Tindakan Terapi')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Tambah Tindakan Terapi</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">Form Tambah Tindakan Terapi</h3>
            </div>

            <form action="{{ route('admin.tindakan-terapi.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control"
                            placeholder="Masukkan kode tindakan">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Tindakan</label>
                        <textarea name="deskripsi_tindakan_terapi"
                                class="form-control"
                                placeholder="Masukkan deskripsi tindakan"
                                required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="idkategori" class="form-control" required>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->idkategori }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kategori Klinis</label>
                        <select name="idkategori_klinis" class="form-control" required>
                            @foreach ($kategoriKlinis as $kk)
                                <option value="{{ $kk->idkategori_klinis }}">{{ $kk->nama_kategori_klinis }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.tindakan-terapi.index') }}" class="btn btn-secondary">
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
