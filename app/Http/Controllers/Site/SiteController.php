<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function layananUmum()
    {
        return view('site.layanan');
    }

    public function visiMisi()
    {
        return view('site.visi_misi');
    }

    public function strukturOrganisasi()
    {
        return view('site.struktur_organisasi');
    }

    public function login()
    {
        return view('site.login');
    }

    public function cekKoneksi()
    {
        try {
            DB::connection()->getPdo();

            return 'Koneksi ke database berhasil!';
        } catch (\Exception $e) {
            return 'Koneksi ke database gagal: '.$e->getMessage();
        }
    }
}
