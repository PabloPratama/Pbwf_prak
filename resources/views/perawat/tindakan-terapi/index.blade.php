<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Kategori Klinis</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kodeTindakan as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->kode }}</td>
            <td>{{ $item->deskripsi_tindakan_terapi }}</td>
            <td>{{ $item->kategori?->nama_kategori ?? 'N/A' }}</td>
            <td>{{ $item->kategoriKlinis?->nama_kategori_klinis ?? 'N/A' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
