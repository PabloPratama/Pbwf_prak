<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisHewan;

class JenisHewanDokterController extends Controller
{
    public function index()
    {
        $jenisHewan = JenisHewan::all();

        return view('dokter.jenis-hewan.index', compact('jenisHewan'));
    }
}
