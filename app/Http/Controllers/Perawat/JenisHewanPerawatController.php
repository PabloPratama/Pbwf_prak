<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisHewan;

class JenisHewanPerawatController extends Controller
{
    public function index()
    {
        $jenisHewan = JenisHewan::all();

        return view('perawat.jenis-hewan.index', compact('jenisHewan'));
    }
}
