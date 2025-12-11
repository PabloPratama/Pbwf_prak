<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;
use App\Models\TemuDokter;
use App\Models\User;

class RekamMedisPerawatController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::with([
            'temuDokter.pet.pemilik.user',
            'dokter'
        ])->orderBy('created_at', 'ASC')->get();

        return view('perawat.rekam-medis.index', compact('rekam'));
    }

    public function create()
    {
        $temu = TemuDokter::with('pet')->get();

        $dokter = User::whereHas('roleUser', function ($q) {
            $q->where('role_user.idrole', 2);
        })->get();

        return view('perawat.rekam-medis.create', compact('temu', 'dokter'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateRekamMedis($request);

        $this->createRekamMedis($validated);

        return redirect()->route('perawat.rekam-medis.index')
            ->with('success', 'Rekam medis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $rekam = RekamMedis::findOrFail($id);
        $temu  = TemuDokter::with('pet')->get();

        $dokter = User::whereHas('roleUser', function ($q) {
            $q->where('role_user.idrole', 2);
        })->get();

        return view('perawat.rekam-medis.edit', compact('rekam', 'temu', 'dokter'));
    }

    public function update(Request $request, $id)
    {
        $rekam = RekamMedis::findOrFail($id);

        $validated = $this->validateRekamMedis($request);

        $rekam->update([
            'anamnesa'           => trim($validated['anamnesa']),
            'temuan_klinis'      => $validated['temuan_klinis'] ?? null,
            'diagnosa'           => trim($validated['diagnosa']),
            'dokter_pemeriksa'   => $validated['dokter_pemeriksa'],
            'idreservasi_dokter' => $validated['idreservasi_dokter'],
        ]);

        return redirect()->route('perawat.rekam-medis.index')
            ->with('success', 'Rekam medis berhasil diperbarui');
    }

    public function destroy($id)
    {
        RekamMedis::findOrFail($id)->delete();

        return redirect()->route('perawat.rekam-medis.index')
            ->with('success', 'Rekam medis berhasil dihapus');
    }

    protected function validateRekamMedis(Request $request)
    {
        return $request->validate([
            'anamnesa'           => 'required|string',
            'temuan_klinis'      => 'nullable|string',
            'diagnosa'           => 'required|string',
            'dokter_pemeriksa'   => 'required|numeric',
            'idreservasi_dokter' => 'required|numeric',
        ]);
    }

    protected function createRekamMedis(array $data)
    {
        RekamMedis::create([
            'anamnesa'           => trim($data['anamnesa']),
            'temuan_klinis'      => $data['temuan_klinis'] ?? null,
            'diagnosa'           => trim($data['diagnosa']),
            'dokter_pemeriksa'   => $data['dokter_pemeriksa'],
            'idreservasi_dokter' => $data['idreservasi_dokter'],
            'created_at'         => now(),
        ]);
    }
}
