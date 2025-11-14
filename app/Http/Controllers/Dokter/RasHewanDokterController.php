<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RasHewan;

class RasHewanDokterController extends Controller
{
    public function index()
    {
        $ras = RasHewan::with('jenisHewan')->get();
        return view('dokter.ras-hewan.index', compact('ras'));
    }
}
