<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('admin.role.index', compact('role'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateRole($request);
        $this->createRole($validated);

        return redirect()->route('admin.role.index');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $validated = $this->validateRole($request);

        $role->update([
            'nama_role' => ucfirst(trim($validated['nama_role']))
        ]);

        return redirect()->route('admin.role.index');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->users()->detach();

        $role->delete();

        return redirect()->route('admin.role.index');
    }

    protected function validateRole(Request $request)
    {
        return $request->validate([
            'nama_role' => 'required|string|min:3|max:50'
        ]);
    }

    protected function createRole(array $data)
    {
        try {
            Role::create([
                'nama_role' => ucfirst(trim($data['nama_role']))
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Gagal menyimpan data role: ' . $e->getMessage());
        }
    }
}
