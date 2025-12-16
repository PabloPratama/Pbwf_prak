<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator; 
use App\Models\User; 
use App\Models\Role; 

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller (Implementasi Kustom)
    |--------------------------------------------------------------------------
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'showLoginForm', 'login']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::with(['roleUser' => function($query) {
            $query->wherePivot('status', 1);
        }])
        ->where('email', $request->input('email'))
        ->first();

        if (!$user) {
            return redirect()->back()
                ->withErrors(['email' => 'Email tidak ditemukan.'])
                ->withInput();
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()
                ->withErrors(['password' => 'Password salah.'])
                ->withInput();
        }

        if ($user->roleUser->isEmpty()) {
            return redirect()->back()
                ->withErrors(['email' => 'Akun tidak memiliki role aktif.'])
                ->withInput();
        }

        $idRole = $user->roleUser[0]->pivot->idrole ?? null; 
        $namaRole = Role::where('idrole', $idRole)->first();

        Auth::login($user);

        // Menyimpan data user dan role ke dalam session
        $request->session()->put([
            'user_id' => $user->iduser,
            'user_name' => $user->nama, 
            'user_email' => $user->email,
            'user_role' => $idRole ?? 'user', 
            'user_role_name' => $namaRole->nama_role ?? 'User',
            'user_status' => $user->roleUser[0]->pivot->status ?? 'active'
        ]);

        // Logika Redireksi Berdasarkan Role (Langkah 6)
        switch ($idRole) {
            case '1': // Administrator
                return redirect()->route('admin.dashboard')->with('success', 'Login berhasil!');
            case '2': // Dokter 
                return redirect()->route('dokter.dashboard')->with('success', 'Login berhasil!');
            case '3': // Perawat 
                return redirect()->route('perawat.dashboard')->with('success', 'Login berhasil!');
            case '4': // Resepsionis 
                return redirect()->route('resepsionis.dashboard')->with('success', 'Login berhasil!');
            case '5': //Pemilik
                return redirect()->route('pemilik.dashboard')->with('succes', 'Login berhasil!');
            default:
                // Redirect default
                return redirect()->intended('/home')->with('success', 'Login berhasil!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil!');
    }
}