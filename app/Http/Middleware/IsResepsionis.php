<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; 

class IsResepsionis
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
        
        // 2. Ambil peran pengguna dari session
        $userRole = session('user_role'); 

        // 3. Cek apakah ID peran adalah Resepsionis (Asumsi ID = 4)
        if ($userRole == 4) { // Sesuaikan dengan ID peran Resepsionis Anda
            return $next($request); // Lanjutkan ke halaman yang diminta
        } else {
            // Tunjukkan pesan error dan arahkan pengguna kembali
            return back()->with('error', 'Akses Ditolak: Anda harus login sebagai Resepsionis.');
        }
    }
}