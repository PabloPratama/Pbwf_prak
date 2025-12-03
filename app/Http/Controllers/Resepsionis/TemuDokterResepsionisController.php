<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TemuDokter;
use App\Models\Pet;

class TemuDokterResepsionisController extends Controller
{
    public function index()
    {
    $temu = TemuDokter::with(['pet.pemilik.user', 'roleDokter.user'])->get();
        return view('resepsionis.temu-dokter.index', compact('temu'));
    }
}
