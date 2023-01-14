<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kepsek extends Controller
{
    public function kepsek()
    {
        return view('kepalasekolah.persetujuan');
    }

    public function persetujian()
    {
        return view('kepalasekolah.persetujian');
    }
    public function laporanadministrasi()
    {
        return view('kepalasekolah.laporanadministrasi');
    }
    public function laporanujian()
    {
        return view('kepalasekolah.laporanujian');
    }
}
