<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\DetailRekamMedis;

class DetailRekamMedisDokterController extends Controller
{
    public function index()
    {
        $detail = DetailRekamMedis::with([
            'rekamMedis.temuDokter.pet.pemilik.user',
            'rekamMedis.dokter',
            'tindakan'
        ])->get();

        return view('dokter.detail-rekam-medis.index', compact('detail'));
    }
}
