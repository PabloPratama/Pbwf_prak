<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Hewan</th>
            <th>Nama Hewan</th>
            <th>Nama Pemilik</th>
            <th>Dokter Pemeriksa</th>
            <th>Kode Tindakan</th>
            <th>Tindakan Terapi</th>
            <th>Keterangan Detail</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($detail as $index => $item)
            @php
                $rekam = $item->rekamMedis;
                $temu  = $rekam?->temuDokter;
                $pet   = $temu?->pet;
                $owner = $pet?->pemilik?->user;
            @endphp

            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pet?->idpet ?? '-' }}</td>
                <td>{{ $pet?->nama ?? '-' }}</td>
                <td>{{ $owner?->nama ?? '-' }}</td>
                <td>{{ $rekam?->dokter?->nama ?? '-' }}</td>
                <td>{{ $item->tindakan?->kode ?? '-' }}</td>
                <td>{{ $item->tindakan?->deskripsi_tindakan_terapi ?? '-' }}</td>
                <td>{{ $item->detail }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
