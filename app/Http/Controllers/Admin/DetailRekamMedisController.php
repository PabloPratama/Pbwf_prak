<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailRekamMedis;
use App\Models\RekamMedis;

class DetailRekamMedisController extends Controller
{
    public function index()
    {
        $detail = DetailRekamMedis::with(['rekamMedis', 'tindakan'])->get();
        return view('admin.detail-rekam-medis.index', compact('detail'));
    }
}
