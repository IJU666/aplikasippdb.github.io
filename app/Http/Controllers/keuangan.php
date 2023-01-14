<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadpembayaran;
use App\Models\Biodatasiswa;
use App\Models\Statuskeuangan;
use App\Models\stkeungan;

class keuangan extends Controller
{
    public function laporan()
    {
        $dtSiswa = uploadpembayaran::with('Biodatasiswa')->paginate();
        return view('keuangan.lprkeuangan',compact('dtSiswa'));
    }

    public function status(Request $request)
    {
        // $dtSiswa = uploadpembayaran::latest();
        
                if($request->has('search')) {
                    $dtSiswa = uploadpembayaran::where('id', 'like', '%' .$request->search. '%')->paginate();
                }
                else{ 
                    $dtSiswa = uploadpembayaran::with('Biodatasiswa')->paginate();
                }
        
        // $dtSiswa = uploadpembayaran::paginate(5);
        // $dtSiswa = uploadpembayaran::with('Biodatasiswa')->paginate();
        return view('keuangan.stkeungan',compact('dtSiswa'));
    }

    public function Statuskeuangan(Request $request)
    {
        Statuskeuangan::create([
            'statuskeuangan' => $request->statuskeuangan,
        ]);

        return redirect('/stskeuangan');
    }
}