<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetPemilikController extends Controller
{
    public function index()
    {
        $pet = Pet::with(['pemilik', 'rasHewan'])->get();
        return view('pemilik.pet.index', compact('pet'));
    }
}
