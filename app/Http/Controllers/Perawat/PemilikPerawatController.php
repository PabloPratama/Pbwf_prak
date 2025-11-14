<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemilik;

class PemilikPerawatController extends Controller
{
    public function index()
    {
        $pemilik = Pemilik::with('user')->get();

        return view('perawat.pemilik.index', compact('pemilik'));
    }
}
