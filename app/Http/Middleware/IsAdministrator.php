<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; 

class IsAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // 2. Ambil peran pengguna dari session (pastikan key 'user_role' digunakan saat login)
        $userRole = session('user_role'); 
        
        // 3. Cek apakah ID peran adalah Administrator (Asumsi ID = 1)
        if ($userRole == 1) { 
            return $next($request); // Lanjutkan ke halaman yang diminta
        } else {
            // Tunjukkan pesan error dan arahkan pengguna kembali
            return back()->with('error', 'Akses Ditolak: Anda harus login sebagai Administrator.');
        }
    }
}