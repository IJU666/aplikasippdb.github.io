<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pengguna;
use App\Models\Biodatasiswa;
use App\Http\Controllers\Controller;
use App\Models\asalsekolah;
use App\Models\ortu;
use App\Models\persyaratan;
use App\Models\wali;
use App\Models\uploadpembayaran;
use App\Models\minatjurusan;
use App\Models\dokumengambar;
use App\Models\Statuskeuangan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class isidata extends Controller
{
    public function isi(Request $request)
    {
        Biodatasiswa::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'ttg' => $request->ttg,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'hp' => $request->hp,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'pengguna' => pengguna::where('email', auth()->user()->email)->first()->id,

        ]);


        return redirect('/jurusan');
    }

    public function jurusan(Request $request)
    {
        minatjurusan::create([
            'jurusan' => $request->jurusan,
            'hobi' => $request->hobi,
            'radio1' => $request->radio1,
            'radio2' => $request->radio2,
            'ketahui' => $request->ketahui,
            'kemampuan' => $request->kemampuan,
            'pengguna' => pengguna::where('email', auth()->user()->email)->first()->id,
        ]);

        return redirect('/asalsekolah');
    }

    public function asalsekolah(Request $request)
    {
        asalsekolah::create([
            'npsn' => $request->npsn,
            'nama_sekolah' => $request->nama_sekolah,
            'nomor_ijazah' => $request->nomor_ijazah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'pengguna' => pengguna::where('email', auth()->user()->email)->first()->id,

        ]);

        return redirect('/ortu');
    }

    public function ortu(Request $request)
    {
        ortu::create([
            'nik_ayah' => $request->nik_ayah,
            'nama_ayah' => $request->nama_ayah,
            'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'hp_ayah' => $request->hp_ayah,
            'nik_ibu' => $request->nik_ibu,
            'nama_ibu' => $request->nama_ibu,
            'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'hp_ibu' => $request->hp_ibu,
            'pengguna' => pengguna::where('email', auth()->user()->email)->first()->id,

        ]);

        return redirect('/dokumen');
    }

    public function wali(Request $request)
    {
        wali::create([
            'nik_wali' => $request->nik_wali,
            'nama_wali' => $request->nama_wali,
            'tanggal_lahir_wali' => $request->tanggal_lahir_wali,
            'pendidikan_wali' => $request->pendidikan_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'hp_wali' => $request->hp_wali,
            'pengguna' => pengguna::where('email', auth()->user()->email)->first()->id,

        ]);
        return redirect('/dokumen');
    }

    public function dokumen(Request $request)
    {
        // dokumengambar::create([
        //     'gambar1' => $request->gambar1,
        //     'gambar2' => $request->gambar2,
        //     'gambar3' => $request->gambar3,
        //     'gambar4' => $request->gambar4,
        // ]);

        $data = $request->validate([
            'gambar1' => 'image|file|max:20000',
            'gambar2' => 'image|file|max:20000',
            'gambar3' => 'image|file|max:20000',
            'gambar4' => 'image|file|max:20000',
            // 'pengguna' => pengguna::where('email',auth()->user()->email)->first()->id,
        ]);

        if ($request->file('gambar1')) {
            $data['gambar1'] = $request->file('gambar1')->store('images');
        }
        if ($request->file('gambar2')) {
            $data['gambar2'] = $request->file('gambar2')->store('images');
        }
        if ($request->file('gambar3')) {
            $data['gambar3'] = $request->file('gambar3')->store('images');
        }
        if ($request->file('gambar4')) {
            $data['gambar4'] = $request->file('gambar4')->store('images');
        }

        $data["pengguna"] = pengguna::where('email', auth()->user()->email)->first()->id;
        dokumengambar::create($data);

        return redirect('/persyaratan');
    }

    public function biaya1(Request $request)
    {
        persyaratan::create([
            'spp' => $request->spp,
            'seragam' => $request->seragam,
            'bangunan' => $request->bangunan,
            'pengguna' => pengguna::where('email', auth()->user()->email)->first()->id,
        ]);

        return redirect('/Privatecs');
    }

    public function upload(Request $request)
    {
        // $nm = $request->bukti;
        // $namaFile = $nm->getClientOriginalName();

        // $data = new uploadpembayaran;
        // $data->ttgpembayaran = $request->ttgpembayaran;
        // $data->jampembayaran = $request->jampembayaran;
        // $data->bukti = $namaFile;

        // $nm->move(public_path().'/gambar', $namaFile);
        // $data->save();
        // return $request->file('bukti')->store('post-images');
        $data = $request->validate([
            'ttgpembayaran' => 'required',
            'jampembayaran' => 'required',
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:20000000'
        ]);

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('post-images');
        }

        $data["pengguna"] = pengguna::where('email', auth()->user()->email)->first()->id;
        $data["biodatasiswa"] = Biodatasiswa::where('pengguna', auth()->user()->id)->first()->id;
        uploadpembayaran::create($data);

        return redirect('/jadwal');
    }

}
