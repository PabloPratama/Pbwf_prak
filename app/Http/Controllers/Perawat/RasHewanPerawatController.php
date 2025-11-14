<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RasHewan;

class RasHewanPerawatController extends Controller
{
    public function index()
    {
        $ras = RasHewan::with('jenisHewan')->get();
        return view('perawat.ras-hewan.index', compact('ras'));
    }
}
