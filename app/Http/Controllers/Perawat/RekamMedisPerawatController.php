<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;

class RekamMedisPerawatController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::with(['temuDokter.pet', 'dokter', 'detail'])->get();
        return view('perawat.rekam-medis.index', compact('rekam'));
    }
}
