<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;

class RekamMedisPemilikController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::with(['temuDokter.pet.pemilik.user','dokter'])->get();
        return view('pemilik.rekam-medis.index', compact('rekam'));
    }
}
