<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Pemilik;
use App\Models\RasHewan;

class PetController extends Controller
{
    public function index()
    {
        $pet = Pet::with(['pemilik.user', 'rasHewan'])->get();
        return view('admin.pet.index', compact('pet'));
    }

    public function create()
    {
        $pemilik = Pemilik::with('user')->get();
        $ras = RasHewan::all();
        return view('admin.pet.create', compact('pemilik', 'ras'));
    }

    public function store(Request $request)
    {
        $data = $this->validatePet($request);
        $this->createPet($data);

        return redirect()->route('admin.pet.index');
    }

    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        $pemilik = Pemilik::with('user')->get();
        $ras = RasHewan::all();

        return view('admin.pet.edit', compact('pet', 'pemilik', 'ras'));
    }

    public function update(Request $request, $id)
    {
        $pet = Pet::findOrFail($id);
        $data = $this->validatePet($request);

        $pet->update($data);

        return redirect()->route('admin.pet.index');
    }

    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect()->route('admin.pet.index');
    }
    
    protected function validatePet(Request $request)
    {
        return $request->validate([
            'nama'           => 'required|string|max:100',
            'tanggal_lahir'  => 'required|date',
            'warna_tanda'    => 'required|string|max:50',
            'jenis_kelamin'  => 'required|in:L,P',
            'idpemilik'      => 'required',
            'idras_hewan'    => 'required',
        ]);
    }

    protected function createPet(array $data)
    {
        try {
            Pet::create($data);
        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data pet: ' . $e->getMessage());
        }
    }
}
