<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::with(['temuDokter.pet.pemilik.user','dokter'])->get();
        return view('admin.rekam-medis.index', compact('rekam'));
    }
}
