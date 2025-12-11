<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RasHewan;
use App\Models\JenisHewan;

class RasHewanController extends Controller
{
    public function index()
    {
        $ras = RasHewan::with('jenisHewan')->get();
        return view('admin.ras-hewan.index', compact('ras'));
    }

    public function create()
    {
        $jenis = JenisHewan::all();
        return view('admin.ras-hewan.create', compact('jenis'));
    }

    public function store(Request $request)
    {
        $data = $this->validateRas($request);
        $this->createRas($data);

        return redirect()->route('admin.ras-hewan.index');
    }

    public function edit($id)
    {
        $ras = RasHewan::findOrFail($id);
        $jenis = JenisHewan::all();

        return view('admin.ras-hewan.edit', compact('ras', 'jenis'));
    }

    public function update(Request $request, $id)
    {
        $ras = RasHewan::findOrFail($id);
        $data = $this->validateRas($request);

        $ras->update($data);

        return redirect()->route('admin.ras-hewan.index');
    }

    public function destroy($id)
    {
        $ras = RasHewan::findOrFail($id);
        $ras->delete();

        return redirect()->route('admin.ras-hewan.index');
    }

    protected function validateRas(Request $request)
    {
        return $request->validate([
            'nama_ras'        => 'required|string|max:100',
            'idjenis_hewan'  => 'required',
        ]);
    }

    protected function createRas(array $data)
    {
        try {
            RasHewan::create($data);
        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data ras hewan: ' . $e->getMessage());
        }
    }
}
