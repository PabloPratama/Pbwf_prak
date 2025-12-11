<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemilik;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PemilikResepsionisController extends Controller
{
    public function index()
    {
        $pemilik = Pemilik::with('user')->get();
        return view('resepsionis.pemilik.index', compact('pemilik'));
    }

    public function create()
    {
        return view('resepsionis.pemilik.create');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validatePemilik($request);
        $this->createPemilik($validatedData);

        return redirect()->route('resepsionis.pemilik.index')
            ->with('success', 'Pemilik berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pemilik = Pemilik::with('user')->findOrFail($id);
        return view('resepsionis.pemilik.edit', compact('pemilik'));
    }

    public function update(Request $request, $id)
    {
        $pemilik = Pemilik::with('user')->findOrFail($id);
        $validated = $this->validatePemilik($request);
        $pemilik->user->update([
            'nama'  => trim(ucwords(strtolower($validated['nama']))),
            'email' => strtolower(str_replace(' ', '', $validated['nama'])) . '@mail.com',
        ]);
        $pemilik->update([
            'no_wa'  => preg_replace('/\s+/', '', $validated['no_wa']),
            'alamat' => ucfirst(trim($validated['alamat'])),
        ]);
        return redirect()->route('resepsionis.pemilik.index')
            ->with('success', 'Data pemilik berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pemilik = Pemilik::findOrFail($id);
        $pemilik->delete();
        User::where('iduser', $pemilik->iduser)->delete();

        return redirect()->route('resepsionis.pemilik.index');
    }

    protected function validatePemilik(Request $request)
    {
        return $request->validate([
            'nama'   => 'required|string|min:3|max:255',
            'no_wa'  => 'required|string|max:45',
            'alamat' => 'required|string|max:100',
        ]);
    }

    protected function createPemilik(array $data)
    {
        try {
            $user = User::create([
                'nama'     => trim(ucwords(strtolower($data['nama']))),
                'email'    => strtolower(str_replace(' ', '', $data['nama'])) . '@mail.com',
                'password' => Hash::make('12345678'),
            ]);
            Pemilik::create([
                'iduser' => $user->iduser,
                'no_wa'  => preg_replace('/\s+/', '', $data['no_wa']),
                'alamat' => ucfirst(trim($data['alamat'])),
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data pemilik: ' . $e->getMessage());
        }
    }
}
