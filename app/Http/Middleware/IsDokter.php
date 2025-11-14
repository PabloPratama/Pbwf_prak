<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsDokter
{
    public function handle(Request $request, Closure $next): Response
    {
        // Jika belum login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Ambil role user dari session
        $userRole = session('user_role'); 

        // Cek apakah role = 2 (Dokter)
        if ($userRole == 2) {
            return $next($request);
        }

        return back()->with('error', 'Akses ditolak: Anda bukan Dokter.');
    }
}
