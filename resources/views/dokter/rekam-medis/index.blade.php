<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Anamnesa</th>
            <th>Diagnosa</th>
            <th>Nama Pet</th>
            <th>Dokter Pemeriksa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rekam as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->anamnesa }}</td>
                <td>{{ $item->diagnosa }}</td>
                <td>{{ $item->pet?->nama ?? 'N/A' }}</td>
                <td>{{ $item->dokter?->nama ?? 'N/A' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
