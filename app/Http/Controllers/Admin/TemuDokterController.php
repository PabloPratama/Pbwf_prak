<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TemuDokter;
use App\Models\Pet;

class TemuDokterController extends Controller
{
    public function index()
    {
        $temu = TemuDokter::with(['pet', 'dokter'])->get();
        return view('admin.temu-dokter.index', compact('temu'));
    }
}
