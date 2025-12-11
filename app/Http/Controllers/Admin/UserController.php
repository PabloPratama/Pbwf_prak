<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roleUser')->get();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateUser($request);
        $this->createUser($validatedData);

        return redirect()->route('admin.user.index')
                        ->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::with('roleUser')->findOrFail($id);
        $roles = Role::all();

        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::with('roleUser')->findOrFail($id);
        $validated = $this->validateUser($request, $id);

        $user->update([
            'nama'  => trim(ucwords(strtolower($validated['nama']))),
            'email' => strtolower(trim($validated['email'])),
        ]);

        if (!empty($validated['password'])) {
            $user->update([
                'password' => Hash::make($validated['password']),
            ]);
        }

        $user->roleUser()->sync([
            $validated['idrole'] => ['status' => 1]
        ]);

        return redirect()->route('admin.user.index')
                        ->with('success', 'Data user berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        Pemilik::where('iduser', $user->iduser)->delete();

        $user->roleUser()->detach();

        $user->delete();

        return redirect()->route('admin.user.index')
                        ->with('success', 'User berhasil dihapus.');
    }

    protected function validateUser(Request $request, $id = null)
    {
        return $request->validate([
            'nama'     => 'required|string|min:3|max:255',
            'email'    => 'required|email|unique:user,email,' . $id . ',iduser',
            'password' => $id ? 'nullable|min:6' : 'required|min:6',
            'idrole'   => 'required',
        ], [
            'nama.required'     => 'Nama user wajib diisi.',
            'email.required'    => 'Email wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'idrole.required'   => 'Role wajib dipilih.',
        ]);
    }

    protected function createUser(array $data)
    {
        try {
            $user = User::create([
                'nama'     => trim(ucwords(strtolower($data['nama']))),
                'email'    => strtolower(trim($data['email'])),
                'password' => Hash::make($data['password']),
            ]);

            $user->roleUser()->attach($data['idrole'], [
                'status' => 1
            ]);

        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data user: ' . $e->getMessage());
        }
    }
}
