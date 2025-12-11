<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriKlinis;

class KategoriKlinisController extends Controller
{
    public function index()
    {
        $kategoriKlinis = KategoriKlinis::all();
        return view('admin.kategori-klinis.index', compact('kategoriKlinis'));
    }

    public function create()
    {
        return view('admin.kategori-klinis.create');
    }

    public function store(Request $request)
    {
        $data = $this->validateKategoriKlinis($request);
        $this->createKategoriKlinis($data);

        return redirect()->route('admin.kategori-klinis.index');
    }

    public function edit($id)
    {
        $kategoriKlinis = KategoriKlinis::findOrFail($id);
        return view('admin.kategori-klinis.edit', compact('kategoriKlinis'));
    }

    public function update(Request $request, $id)
    {
        $kategoriKlinis = KategoriKlinis::findOrFail($id);
        $data = $this->validateKategoriKlinis($request);

        $kategoriKlinis->update($data);

        return redirect()->route('admin.kategori-klinis.index');
    }

    public function destroy($id)
    {
        $kategoriKlinis = KategoriKlinis::findOrFail($id);
        $kategoriKlinis->delete();

        return redirect()->route('admin.kategori-klinis.index');
    }

    protected function validateKategoriKlinis(Request $request)
    {
        return $request->validate([
            'nama_kategori_klinis' => 'required|string|max:100',
        ]);
    }

    protected function createKategoriKlinis(array $data)
    {
        try {
            KategoriKlinis::create($data);
        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data kategori klinis: ' . $e->getMessage());
        }
    }
}
