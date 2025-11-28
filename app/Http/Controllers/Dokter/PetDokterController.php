<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetDokterController extends Controller
{
    public function index()
    {
        $pet = Pet::with(['pemilik', 'rasHewan'])->get();
        return view('dokter.pet.index', compact('pet'));
    }
}
