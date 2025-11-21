<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th><th>Nama Pet</th><th>Jenis Kelamin</th><th>Ras Hewan</th><th>Pemilik</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pet as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->rasHewan?->nama_ras ?? 'N/A' }}</td>
            <td>{{ $item->pemilik?->user?->nama ?? 'N/A' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
