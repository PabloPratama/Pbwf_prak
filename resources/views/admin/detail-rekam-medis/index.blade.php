@extends('layouts.app')

@section('content')
<h4>Detail Rekam Medis</h4>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Tindakan</th>
            <th>Tindakan Terapi</th>
            <th>Keterangan Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($detail as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->tindakan?->kode ?? '-' }}</td>
                <td>{{ $item->tindakan?->deskripsi_tindakan_terapi ?? '-' }}</td>
                <td>{{ $item->detail }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
