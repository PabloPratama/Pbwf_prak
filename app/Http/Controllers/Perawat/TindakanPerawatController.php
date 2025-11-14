<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KodeTindakanTerapi;

class TindakanPerawatController extends Controller
{
    public function index()
    {
        $kodeTindakan = KodeTindakanTerapi::with(['kategori', 'kategoriKlinis'])->get();
        return view('perawat.tindakan-terapi.index', compact('kodeTindakan'));
    }
}
