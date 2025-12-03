<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;

class RekamMedisPerawatController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::with(['temuDokter.pet.pemilik.user','dokter'])->get();
        return view('perawat.rekam-medis.index', compact('rekam'));
    }
}
