<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pet</th>
            <th>Waktu Daftar</th>
            <th>Status</th>
            <th>Nama Dokter</th>
            <th>No Urut</th>
            <th>Nama Pemilik</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($temu as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->pet?->nama ?? 'N/A' }}</td>
            <td>{{ $item->waktu_daftar }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->roleDokter?->user?->nama ?? '-' }}</td>
            <td>{{ $item->no_urut }}</td>
            <td>{{ $item->pet?->pemilik?->user?->nama ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

