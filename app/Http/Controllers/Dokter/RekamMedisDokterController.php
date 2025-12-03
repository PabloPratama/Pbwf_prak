<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;

class RekamMedisDokterController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::with(['temuDokter.pet.pemilik.user','dokter'])->get();
        return view('dokter.rekam-medis.index', compact('rekam'));
    }
}
