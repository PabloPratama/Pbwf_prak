<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KodeTindakanTerapi;

class TindakanDokterController extends Controller
{
    public function index()
    {
        $kodeTindakan = KodeTindakanTerapi::with(['kategori', 'kategoriKlinis'])->get();
        return view('dokter.tindakan-terapi.index', compact('kodeTindakan'));
    }
}
