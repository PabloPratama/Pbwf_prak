<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardResepsionisController extends Controller
{
    public function index()
    {
        $totalPemilik = DB::table('pemilik')->count();
        $totalPet = DB::table('pet')->count();
        $totalTemuDokter = DB::table('temu_dokter')->count();

        return view('resepsionis.dashboard-resepsionis', compact(
            'totalPemilik',
            'totalPet',
            'totalTemuDokter'
        ));
    }
}
