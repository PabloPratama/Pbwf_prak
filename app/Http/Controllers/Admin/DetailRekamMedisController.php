<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailRekamMedis;
use App\Models\RekamMedis;
use App\Models\KodeTindakanTerapi;

class DetailRekamMedisController extends Controller
{
    public function index()
    {
        $detail = DetailRekamMedis::with([
            'rekamMedis.temuDokter.pet.pemilik.user',
            'rekamMedis.dokter',
            'tindakan'
        ])->orderBy('iddetail_rekam_medis', 'ASC')->get();

        return view('admin.detail-rekam-medis.index', compact('detail'));
    }

    public function create()
    {
        $rekam = RekamMedis::with('temuDokter.pet')->get();
        $tindakan = KodeTindakanTerapi::all();

        return view('admin.detail-rekam-medis.create', compact('rekam', 'tindakan'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateDetail($request);

        $this->createDetail($validated);

        return redirect()->route('admin.detail-rekam-medis.index')
            ->with('success', 'Detail rekam medis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $detail = DetailRekamMedis::findOrFail($id);
        $rekam = RekamMedis::with('temuDokter.pet')->get();
        $tindakan = KodeTindakanTerapi::all();

        return view('admin.detail-rekam-medis.edit', compact('detail', 'rekam', 'tindakan'));
    }

    public function update(Request $request, $id)
    {
        $detail = DetailRekamMedis::findOrFail($id);

        $validated = $this->validateDetail($request);

        $detail->update([
            'idrekam_medis' => $validated['idrekam_medis'],
            'idkode_tindakan_terapi' => $validated['idkode_tindakan_terapi'],
            'detail' => $validated['detail'],
        ]);

        return redirect()->route('admin.detail-rekam-medis.index')
            ->with('success', 'Detail rekam medis berhasil diperbarui');
    }

    public function destroy($id)
    {
        DetailRekamMedis::findOrFail($id)->delete();

        return redirect()->route('admin.detail-rekam-medis.index')
            ->with('success', 'Detail rekam medis berhasil dihapus');
    }

    protected function validateDetail(Request $request)
    {
        return $request->validate([
            'idrekam_medis' => 'required|numeric',
            'idkode_tindakan_terapi' => 'required|numeric',
            'detail' => 'nullable|string',
        ], [
            'idrekam_medis.required' => 'Rekam medis wajib dipilih.',
            'idkode_tindakan_terapi.required' => 'Kode tindakan wajib dipilih.',
        ]);
    }

    protected function createDetail(array $data)
    {
        DetailRekamMedis::create([
            'idrekam_medis' => $data['idrekam_medis'],
            'idkode_tindakan_terapi' => $data['idkode_tindakan_terapi'],
            'detail' => $data['detail'] ?? null,
        ]);
    }
}
