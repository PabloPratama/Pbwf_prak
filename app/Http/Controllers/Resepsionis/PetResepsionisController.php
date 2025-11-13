<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;
use App\Models\Pet;

class PetResepsionisController extends Controller
{
    public function index()
    {
        $pet = Pet::with(['pemilik', 'rasHewan'])->get();
        return view('resepsionis.pet.index', compact('pet'));
    }
}