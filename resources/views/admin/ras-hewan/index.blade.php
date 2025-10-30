<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ras Hewan</th>
            <th>Jenis Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rasHewan as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_ras }}</td>
                <td>{{ $item->jenisHewan?->nama_jenis_hewan ?? 'N/A' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
