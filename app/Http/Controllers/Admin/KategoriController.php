<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $data = $this->validateKategori($request);
        $this->createKategori($data);

        return redirect()->route('admin.kategori.index');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $data = $this->validateKategori($request);

        $kategori->update($data);

        return redirect()->route('admin.kategori.index');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('admin.kategori.index');
    }

    protected function validateKategori(Request $request)
    {
        return $request->validate([
            'nama_kategori' => 'required|string|max:100',
        ]);
    }

    protected function createKategori(array $data)
    {
        try {
            Kategori::create($data);
        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data kategori: ' . $e->getMessage());
        }
    }
}
