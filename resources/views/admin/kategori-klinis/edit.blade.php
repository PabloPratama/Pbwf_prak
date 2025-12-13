@extends('layouts.lte.main')

@section('title', 'Edit Kategori Klinis')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Kategori Klinis</h1>
    </div>
</section>

<section class="content">
<div class="container-fluid">

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Form Edit Kategori Klinis</h3>
        </div>

        <form action="{{ route('admin.kategori-klinis.update', $kategoriKlinis->idkategori_klinis) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label>Nama Kategori Klinis</label>
                    <input type="text" name="nama_kategori_klinis"
                        value="{{ $kategoriKlinis->nama_kategori_klinis }}"
                        class="form-control" required>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('admin.kategori-klinis.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>

                <button class="btn btn-warning text-white"><i class="fas fa-save"></i> Perbarui</button>
            </div>

        </form>
    </div>

</div>
</section>

@endsection
