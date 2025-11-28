<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TemuDokter;
use App\Models\Pet;

class TemuDokterPemilikController extends Controller
{
    public function index()
    {
        $temu = TemuDokter::with(['pet', 'dokter'])->get();
        return view('pemilik.temu-dokter.index', compact('temu'));
    }
}
