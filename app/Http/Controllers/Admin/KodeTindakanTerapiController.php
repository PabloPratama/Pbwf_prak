<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KodeTindakanTerapi;

class KodeTindakanTerapiController extends Controller
{
    public function index()
    {
        $kodeTindakan = KodeTindakanTerapi::with(['kategori', 'kategoriKlinis'])->get();

        return view('admin.kode-tindakan-terapi.index', compact('kodeTindakan'));
    }
}
