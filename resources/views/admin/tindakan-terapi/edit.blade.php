@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Tindakan Terapi</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.tindakan-terapi.update', $tindakan->idkode_tindakan_terapi) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Kode</label>
                <input type="text" name="kode" class="form-control" value="{{ $tindakan->kode }}">
            </div>

            <div class="mb-3">
                <label>Deskripsi Tindakan</label>
                <textarea name="deskripsi_tindakan_terapi" class="form-control" required>{{ $tindakan->deskripsi_tindakan_terapi }}</textarea>
            </div>

            <div class="mb-3">
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

            <div class="mb-3">
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

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.tindakan-terapi.index') }}" class="btn btn-secondary">Kembali</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
