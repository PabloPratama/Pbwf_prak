<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetPerawatController extends Controller
{
    public function index()
    {
        $pet = Pet::with(['pemilik', 'rasHewan'])->get();
        return view('perawat.pet.index', compact('pet'));
    }
}
