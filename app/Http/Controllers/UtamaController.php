<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regist;

class UtamaController extends Controller
{
    public function index()
    {
        return view('utamablade.beranda');
    }

    public function kompe()
    {
        return view('utamablade.main');
    }

    
    public function pendaftaran()
    {
        return view('utamablade.pendaftaran');
    }

}
