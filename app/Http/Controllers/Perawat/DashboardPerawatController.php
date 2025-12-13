<?php

namespace App\Http\Controllers\Perawat;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardPerawatController extends Controller
{
    public function index()
    {
        $totalPasien = DB::table('pet')->count();
        $totalRekam = DB::table('rekam_medis')->count();
        $totalTindakan = DB::table('kode_tindakan_terapi')->count();

        return view('perawat.dashboard-perawat', compact(
            'totalPasien',
            'totalRekam',
            'totalTindakan'
        ));
    }
}
