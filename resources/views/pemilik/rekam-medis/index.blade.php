<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Anamnesa</th>
            <th>Temuan Klinis</th>
            <th>Diagnosa</th>
            <th>Nama Pet</th>
            <th>Nama Pemilik</th>
            <th>Dokter Pemeriksa</th>
            <th>ID Reservasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rekam as $index => $item)
            @php
                $temu = $item->temuDokter;
                $pet = $temu?->pet;
                $owner = $pet?->pemilik?->user;
            @endphp
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->anamnesa }}</td>
                <td>{{ $item->temuan_klinis ?? '-' }}</td>
                <td>{{ $item->diagnosa }}</td>
                <td>{{ $pet?->nama ?? '-' }}</td>
                <td>{{ $item->temuDokter?->pet?->pemilik?->user?->nama ?? '-' }}</td>
                <td>{{ $item->dokter?->nama ?? '-' }}</td>
                <td>{{ $item->idreservasi_dokter ?? '-' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
