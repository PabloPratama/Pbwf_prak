<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailRekamMedis;
use App\Models\RekamMedis;

class DetailRekamMedisPerawatController extends Controller
{
    public function index()
    {
    $detail = DetailRekamMedis::with([
        'rekamMedis.temuDokter.pet', 
        'rekamMedis.dokter',
        'tindakan'
    ])->get();
    return view('perawat.detail-rekam-medis.index', compact('detail'));
    }
}
