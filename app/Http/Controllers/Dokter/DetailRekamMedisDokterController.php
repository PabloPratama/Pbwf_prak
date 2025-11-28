<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailRekamMedis;
use App\Models\RekamMedis;

class DetailRekamMedisDokterController extends Controller
{
    public function index()
    {
    $detail = DetailRekamMedis::with([
        'rekamMedis.temuDokter.pet', 
        'rekamMedis.dokter',
        'tindakan'
    ])->get();
    return view('dokter.detail-rekam-medis.index', compact('detail'));
    }
}
