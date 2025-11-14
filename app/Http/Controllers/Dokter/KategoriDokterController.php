<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriDokterController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('dokter.kategori.index', compact('kategori'));
    }
}
