<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use App\Models\Perawat;

class PerawatController extends Controller
{
    public function index()
    {
        $perawat = Perawat::with('user')->get();

        return view('perawat.perawat.index', compact('perawat'));
    }

    public function show($id)
    {
        $perawat = Perawat::with('user')->findOrFail($id);

        return view('perawat.perawat.show', compact('perawat'));
    }
}
