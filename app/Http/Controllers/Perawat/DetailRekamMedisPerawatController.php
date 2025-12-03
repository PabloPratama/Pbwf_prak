<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use App\Models\DetailRekamMedis;

class DetailRekamMedisPerawatController extends Controller
{
    public function index()
    {
        $detail = DetailRekamMedis::with([
            'rekamMedis.temuDokter.pet.pemilik.user',
            'rekamMedis.dokter',
            'tindakan'
        ])->get();

        return view('perawat.detail-rekam-medis.index', compact('detail'));
    }
}
