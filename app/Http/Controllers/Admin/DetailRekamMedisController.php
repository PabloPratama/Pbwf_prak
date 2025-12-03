<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailRekamMedis;

class DetailRekamMedisController extends Controller
{
    public function index()
    {
        $detail = DetailRekamMedis::with([
            'rekamMedis.temuDokter.pet.pemilik.user',
            'rekamMedis.dokter',
            'tindakan'
        ])->get();

        return view('admin.detail-rekam-medis.index', compact('detail'));
    }
}
