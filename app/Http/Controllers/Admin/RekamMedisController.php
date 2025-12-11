<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;
use App\Models\TemuDokter;
use App\Models\User;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::with([
            'temuDokter.pet.pemilik.user',
            'dokter'
        ])->orderBy('created_at', 'ASC')->get();

        return view('admin.rekam-medis.index', compact('rekam'));
    }

    public function create()
    {
        $temu = TemuDokter::with('pet')->get();

        $dokter = User::whereHas('roleUser', function ($q) {
            $q->where('role_user.idrole', 2);
        })->get();

        return view('admin.rekam-medis.create', compact('temu', 'dokter'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateRekamMedis($request);

        $this->createRekamMedis($validated);

        return redirect()->route('admin.rekam-medis.index')
            ->with('success', 'Rekam medis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $rekam = RekamMedis::findOrFail($id);
        $temu  = TemuDokter::with('pet')->get();

        $dokter = User::whereHas('roleUser', function ($q) {
            $q->where('role_user.idrole', 2);
        })->get();

        return view('admin.rekam-medis.edit', compact('rekam', 'temu', 'dokter'));
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

        return redirect()->route('admin.rekam-medis.index')
            ->with('success', 'Rekam medis berhasil diperbarui');
    }

    public function destroy($id)
    {
        RekamMedis::findOrFail($id)->delete();

        return redirect()->route('admin.rekam-medis.index')
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
        ], [
            'anamnesa.required' => 'Anamnesa wajib diisi.',
            'diagnosa.required' => 'Diagnosa wajib diisi.',
            'dokter_pemeriksa.required' => 'Dokter wajib dipilih.',
            'idreservasi_dokter.required' => 'Reservasi wajib dipilih.',
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
