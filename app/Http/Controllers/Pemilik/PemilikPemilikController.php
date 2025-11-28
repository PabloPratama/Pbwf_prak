<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemilik;

class PemilikPemilikController extends Controller
{
    public function index()
    {
        $pemilik = Pemilik::with('user')->get();

        return view('pemilik.pemilik.index', compact('pemilik'));
    }
}
