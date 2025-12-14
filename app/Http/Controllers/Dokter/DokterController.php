<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::with('user')->get();

        return view('dokter.dokter.index', compact('dokter'));
    }

    public function show($id)
    {
        $dokter = Dokter::with('user')->findOrFail($id);

        return view('dokter.dokter.show', compact('dokter'));
    }
}
