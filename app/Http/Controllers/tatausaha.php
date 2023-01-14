<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\Biodatasiswa;
use App\Models\minatjurusan;
use App\Models\asalsekolah;
use App\Models\ortu;
use App\Models\wali;
use App\Models\persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class tatausaha extends Controller
{
    public function datasiswa(Request $request)
    {
        // require 'privatesiswa.php';

        $biodata_lengkap = false;
        $minat_lengkap = false;
        $asalsekolah_lengkap = false;
        $ortu_lengkap = false;
        $biaya_lengkap = false;

        $biodata1 = pengguna::all()->first();
        $minat1 = pengguna::all()->first();
        $asalsekolah1 = pengguna::all()->first();
        $biaya1 = pengguna::all()->first();
        $ortu1 = pengguna::all()->first();
        $wali1 = pengguna::all()->first();

        $biodata = $biodata1->biodatasiswa;
        $asalsekolah = $asalsekolah1->asalsekolah;
        $minat = $minat1->minatjurusan;
        $ortu = $ortu1->ortu;
        $biaya = $biaya1->biaya;
        $wali = $wali1->wali;
        if ($biodata) {
            if ($biodata->nisn && $biodata->nama && $biodata->tempat_lahir && $biodata->ttg && $biodata->jk && $biodata->agama && $biodata->hp && $biodata->alamat && $biodata->status && $biodata->keterangan) {
                $biodata_lengkap = true;
            }
        }
        if ($minat) {
             if ($minat->jurusan && $minat->hobi && $minat->radio1 && $minat->radio2 && $minat->ketahui && $minat->kemampuan) {
                $minat_lengkap = true;
             }
        }
        if ($asalsekolah) {
            if ($asalsekolah->npsn && $asalsekolah->nama_sekolah && $asalsekolah->nomor_ijazah && $asalsekolah->alamat_sekolah && $asalsekolah->provinsi && $asalsekolah->kota && $asalsekolah->kecamatan && $asalsekolah->desa) {
                $asalsekolah_lengkap = true;
            }
        }
        if ($wali) {
            if ($wali->nik_wali && $wali->nama_wali && $wali->tanggal_lahir_wali && $wali->pendidikan_wali && $wali->pekerjaan_wali && $wali->hp_wali) {
                $ortu_lengkap = true;
            }
        }
        if ($ortu) {
            if ($ortu->nik_ayah && $ortu->nama_ayah && $ortu->tanggal_lahir_ayah && $ortu->pendidikan_ayah && $ortu->pekerjaan_ayah && $ortu->hp_ayah && $ortu->nik_ibu && $ortu->nama_ibu && $ortu->tanggal_lahir_ibu && $ortu->pendidikan_ibu && $ortu->pekerjaan_ibu && $ortu->hp_ibu) {
                $ortu_lengkap = true;
            }
        }
        if ($biaya) {   
           if ($biaya->spp && $biaya->seragam && $biaya->bangunan) {
                $biaya_lengkap = true;
            }
        }
        $dtSiswa = Biodatasiswa::all();
        $dt = minatjurusan::all();
        // $dtSiswa = asalsekolah::all();
        // $dtSiswa = ortu::all();
        // $dtSiswa = wali::all();
        // $dtSiswa = persyaratan::all();
        // $dtSiswa = Biodatasiswa::all();
        // $dtSiswa = uploadpembayaran::latest();
        
        if($request->has('search')) {
            $dtSiswa = Biodatasiswa::where('id', 'LIKE', '%' .$request->search. '%')->paginate();
        }
        else{ 
            $dtSiswa = Biodatasiswa::paginate();
        }
        return view('Tata_Usaha.datasiswa_tu',compact('dt','dtSiswa','biodata_lengkap','minat_lengkap', 'asalsekolah_lengkap','ortu_lengkap','biaya_lengkap'));
    }

    public function hasiladministrasitu()
    {

        $dtSiswa = Biodatasiswa::all();
        return view('Tata_Usaha.hasiladmin_tu',compact('dtSiswa'));
    }

    public function hasilujiantu()
    {
        $dtSiswa = Biodatasiswa::all();
        return view('Tata_Usaha.hasilujian_tu',compact('dtSiswa'));
    }
    
    public function laporanadministrasitu()
    {
        return view('Tata_Usaha.laporanadmin');
    }
    public function laporanujiantu()
    {
        return view('Tata_Usaha.laporanujian');
    }

    public function aturjadwal()
    {
        return view('Tata_Usaha.aturjadwal');
    }

    public function pilihsiswa()
    {
        return view('Tata_Usaha.pilihsiswa');
    }

    public function confirm_hasilujian()
    {
        return view('Tata_Usaha.confirm_hasilujian');
    }

   

    
    
}
