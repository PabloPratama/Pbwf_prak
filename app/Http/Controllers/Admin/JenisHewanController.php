<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisHewan;
use Illuminate\Http\Request;


class JenisHewanController extends Controller
{
    public function index()
    {
        $jenisHewan = JenisHewan::all();

        return view('admin.jenis-hewan.index', compact('jenisHewan'));
    }
    public function create()
    {
    return view('admin.jenis-hewan.create');
    }

    public function store(Request $request)
    {

    $validatedData = $this->validateJenisHewan($request);

    $this->createJenisHewan($validatedData);

    return redirect()->route('admin.jenis-hewan.index')
                    ->with('success', 'Jenis hewan berhasil ditambahkan.');
    }

    public function edit($id)
{
    $jenis = JenisHewan::findOrFail($id);
    return view('admin.jenis-hewan.edit', compact('jenis'));
}

public function update(Request $request, $id)
{
    $validated = $this->validateJenisHewan($request, $id);

    $jenis = JenisHewan::findOrFail($id);
    $jenis->update([
        'nama_jenis_hewan' => $this->formatNamaJenisHewan($validated['nama_jenis_hewan'])
    ]);

    return redirect()->route('admin.jenis-hewan.index')
                    ->with('success', 'Jenis hewan berhasil diperbarui.');
}

public function destroy($id)
{
    $jenis = JenisHewan::findOrFail($id);
    $jenis->delete();

    return redirect()->route('admin.jenis-hewan.index')
                    ->with('success', 'Jenis hewan berhasil dihapus.');
}


    protected function validateJenisHewan(Request $request, $id = null)
    {

    $uniqueRule = $id ?
        'unique:jenis_hewan,nama_jenis_hewan,' . $id . ',idjenis_hewan' :
        'unique:jenis_hewan,nama_jenis_hewan';

        
    return $request->validate([
        'nama_jenis_hewan' => [
            'required',
            'string',
            'max:255',
            'min:3',
            $uniqueRule
        ],
    ], [
        'nama_jenis_hewan.required' => 'Nama jenis hewan wajib diisi.',
        'nama_jenis_hewan.string' => 'Nama jenis hewan harus berupa teks.',
        'nama_jenis_hewan.max' => 'Nama jenis hewan maksimal 255 karakter.',
        'nama_jenis_hewan.min' => 'Nama jenis hewan minimal 3 karakter.',
        'nama_jenis_hewan.unique' => 'Nama jenis hewan sudah ada.',
    ]);
    }
    
    protected function createJenisHewan(array $data)
    {
    try {
        return JenisHewan::create([
            'nama_jenis_hewan' => $this->formatNamaJenisHewan($data['nama_jenis_hewan'])
        ]);
    } catch (\Exception $e) {
        throw new \Exception('Gagal menyimpan data jenis hewan: ' . $e->getMessage());
    }
    }
    protected function formatNamaJenisHewan($nama)
    {
    return trim(ucwords(strtolower($nama)));
    }
}


