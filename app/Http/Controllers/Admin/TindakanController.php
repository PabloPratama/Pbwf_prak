<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KodeTindakanTerapi;
use App\Models\Kategori;
use App\Models\KategoriKlinis;

class TindakanController extends Controller
{
    public function index()
    {
        $kodeTindakan = KodeTindakanTerapi::with(['kategori', 'kategoriKlinis'])->get();
        return view('admin.tindakan-terapi.index', compact('kodeTindakan'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $kategoriKlinis = KategoriKlinis::all();

        return view('admin.tindakan-terapi.create', compact('kategori', 'kategoriKlinis'));
    }

    public function store(Request $request)
    {
        $data = $this->validateTindakan($request);
        $this->createTindakan($data);

        return redirect()->route('admin.tindakan-terapi.index');
    }

    public function edit($id)
    {
        $tindakan = KodeTindakanTerapi::findOrFail($id);
        $kategori = Kategori::all();
        $kategoriKlinis = KategoriKlinis::all();

        return view('admin.tindakan-terapi.edit', compact('tindakan', 'kategori', 'kategoriKlinis'));
    }

    public function update(Request $request, $id)
    {
        $tindakan = KodeTindakanTerapi::findOrFail($id);
        $data = $this->validateTindakan($request);

        $tindakan->update($data);

        return redirect()->route('admin.tindakan-terapi.index');
    }

    public function destroy($id)
    {
        $tindakan = KodeTindakanTerapi::findOrFail($id);
        $tindakan->delete();

        return redirect()->route('admin.tindakan-terapi.index');
    }

    protected function validateTindakan(Request $request)
    {
        return $request->validate([
            'kode'                     => 'nullable|string|max:5',
            'deskripsi_tindakan_terapi'=> 'required|string|max:1000',
            'idkategori'               => 'required',
            'idkategori_klinis'        => 'required',
        ]);
    }

    protected function createTindakan(array $data)
    {
        try {
            KodeTindakanTerapi::create($data);
        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data tindakan: ' . $e->getMessage());
        }
    }
}
