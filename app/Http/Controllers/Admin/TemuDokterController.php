<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TemuDokter;
use App\Models\Pet;
use App\Models\RoleUser;

class TemuDokterController extends Controller
{
    public function index()
    {
        $temu = TemuDokter::with(['pet.pemilik.user', 'roleDokter.user'])->get();
        return view('admin.temu-dokter.index', compact('temu'));
    }

    public function create()
    {
        $pet = Pet::with('pemilik.user')->get();
        $dokter = RoleUser::with('user')->where('idrole', 2)->get();

        return view('admin.temu-dokter.create', compact('pet', 'dokter'));
    }

    public function store(Request $request)
    {
        $data = $this->validateTemuDokter($request);
        $this->createTemuDokter($data);

        return redirect()->route('admin.temu-dokter.index')
            ->with('success', 'Data temu dokter berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $temu = TemuDokter::findOrFail($id);
        $pet = Pet::with('pemilik.user')->get();
        $dokter = RoleUser::with('user')->where('idrole', 2)->get();

        return view('admin.temu-dokter.edit', compact('temu', 'pet', 'dokter'));
    }

    public function update(Request $request, $id)
    {
        $temu = TemuDokter::findOrFail($id);
        $data = $this->validateTemuDokter($request);

        $temu->update($data);

        return redirect()->route('admin.temu-dokter.index')
            ->with('success', 'Data temu dokter berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $temu = TemuDokter::findOrFail($id);
        $temu->delete();

        return redirect()->route('admin.temu-dokter.index');
    }

    protected function validateTemuDokter(Request $request)
    {
        return $request->validate([
            'no_urut'      => 'required|numeric',
            'status'       => 'required|in:S,W',
            'idpet'        => 'required',
            'idrole_user' => 'required',
        ]);
    }

    protected function createTemuDokter(array $data)
    {
        try {
            $data['waktu_daftar'] = now();
            TemuDokter::create($data);
        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data temu dokter: ' . $e->getMessage());
        }
    }
}
