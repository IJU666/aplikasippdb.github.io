<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\Biodatasiswa;
use App\Models\minatjurusan;
use App\Models\asalsekolah;
use App\Models\persyaratan;
use App\Models\dokumengambar;
use App\Models\uploadpembayaran;
use App\Models\ortu;
use App\Models\wali;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\storage;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class privatesiswa extends Controller
{
    public function calonsiswa()
    {

        $biodata_lengkap = false;
        $minat_lengkap = false;
        $asalsekolah_lengkap = false;
        $ortu_lengkap = false;
        $biaya_lengkap = false;
        $dokumen_lengkap = false;
        // $wali_lengkap = false;

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $biaya1 = pengguna::where('email', auth()->user()->email)->first();
        $ortu1 = pengguna::where('email', auth()->user()->email)->first();
        $dokumen1 = pengguna::where('email', auth()->user()->email)->first();
        $wali1 = pengguna::where('email', auth()->user()->email)->first();

        $biodata = $biodata1->biodatasiswa;
        $asalsekolah = $asalsekolah1->asalsekolah;
        $minat = $minat1->minatjurusan;
        $ortu = $ortu1->ortu;
        $biaya = $biaya1->biaya;
        $dokumen = $dokumen1->dokumen;
        $wali = $wali1->wali;
        if ($biodata) {
            if ($biodata->nisn && $biodata->nama && $biodata->tempat_lahir && $biodata->ttg && $biodata->jk && $biodata->agama && $biodata->hp && $biodata->alamat  && $biodata->provinsi && $biodata->kota && $biodata->kecamatan && $biodata->desa && $biodata->status && $biodata->keterangan) {
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
        if ($ortu) {
            if ($ortu->nik_ayah && $ortu->nama_ayah && $ortu->tanggal_lahir_ayah && $ortu->pendidikan_ayah && $ortu->pekerjaan_ayah && $ortu->hp_ayah && $ortu->nik_ibu && $ortu->nama_ibu && $ortu->tanggal_lahir_ibu && $ortu->pendidikan_ibu && $ortu->pekerjaan_ibu && $ortu->hp_ibu) {
                $ortu_lengkap = true;
            }
        }
        if ($wali) {
            if ($wali->nik_wali && $wali->nama_wali && $wali->tanggal_lahir_wali && $wali->pendidikan_wali && $wali->pekerjaan_wali && $wali->hp_wali) {
                $ortu_lengkap = true;
            }
        }
        if ($biaya) {
            if ($biaya->spp && $biaya->seragam && $biaya->bangunan) {
                $biaya_lengkap = true;
            }
        }
        if ($dokumen) {
            if ($dokumen->gambar1 && $dokumen->gambar2 && $dokumen->gambar3 && $dokumen->gambar4) {
                $dokumen_lengkap = true;
            }
        }
        return view('privatesiswa.pvtsis', compact('biodata_lengkap', 'minat_lengkap', 'asalsekolah_lengkap', 'ortu_lengkap', 'biaya_lengkap', 'dokumen_lengkap'));
    }

    public function hasilseleksi()
    {
        return view('privatesiswa.hasilseleksi');
    }

    public function jadwal()
    {
        return view('privatesiswa.jadwal');
    }

    public function pembayaran()
    {
        return view('privatesiswa.pembayaran');
    }

    public function tampilanprofil()
    {
        return view('privatesiswa.tampilanprofil');
    }

    public function editprofil()
    {
        return view('privatesiswa.editprofil');
    }

    public function updateprofil(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:5', 'confirmed'],
        ]);

        // Auth::guard('pengguna')
        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('message', 'sandi telah di ubah');
        }
        throw ValidationException::withMessages([
            'current_password' => 'sandi Tidak Sesuai',

        ]);
    }

    // daerah untuk bagian biodata 

    public function isidata()
    {
        $provinces = Province::all();

        return view('privatesiswa.biodata', compact('provinces'));
    }

    public function getkabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Pilih</option>";

        foreach ($kabupatens as $kabupaten) {
            $option .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
        echo $option;
    }

    public function getkecamatan(request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Pilih</option>";

        foreach ($kecamatans as $kecamatan) {
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }

    public function getdesa(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Pilih</option>";

        foreach ($desas as $desa) {
            $option .= "<option value='$desa->id'>$desa->name</option>";
        }

        echo $option;
    }
    // akhir daerah bagian biodata


    public function minat()
    {
        // $data = Biodatasiswa::all();
        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;
        return view('privatesiswa.minatjur', compact('biodata'));
    }

    public function asal()
    {
        $provinces = Province::all();
        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;
        return view('privatesiswa.asalsekolah', compact('provinces','minat','biodata'));
    }

    public function ortu()
    {
        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;
        return view('privatesiswa.ortu',compact('asalsekolah','biodata','minat'));
    }

    public function wali()
    {
        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;
        return view('privatesiswa.wali',compact('asalsekolah','biodata','minat'));
    }

    public function dokumen()
    {
        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;

        $ortu1 = pengguna::where('email', auth()->user()->email)->first();
        $ortu = $ortu1->ortu;

        $dokumen1 = pengguna::where('email', auth()->user()->email)->first();
        $dokumen = $dokumen1->dokumen;

        return view('privatesiswa.dokumen',compact('ortu','dokumen','asalsekolah','biodata','minat'));
    }   

    public function biaya()
    {
        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;

        $biaya1 = pengguna::where('email', auth()->user()->email)->first();
        $biaya = $biaya1->biaya;

        $ortu1 = pengguna::where('email', auth()->user()->email)->first();
        $ortu = $ortu1->ortu;

        $dokumen1 = pengguna::where('email', auth()->user()->email)->first();
        $dokumen = $dokumen1->dokumen;

        return view('privatesiswa.biaya',compact('dokumen','ortu','biaya','asalsekolah','biodata','minat'));
    }

    // Edit Isidata
    // biodata siswa
    public function edit($id){
        $provinces = Province::all();
        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;

        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        $biaya1 = pengguna::where('email', auth()->user()->email)->first();
        $biaya = $biaya1->biaya;

        $siswa = Biodatasiswa::findorfail($id);
        return view('privatesiswa.edit-biodata',compact('biaya','asalsekolah','provinces','siswa','minat'));
    }

    public function update(Request $request, $id){
        $siswa = Biodatasiswa::findorfail($id);
        $siswa->update($request->all());
        return redirect('/jurusan');
    }

    // minat jurusan
    public function edit1($id){
        $minat = minatjurusan::findorfail($id);

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        $biaya1 = pengguna::where('email', auth()->user()->email)->first();
        $biaya = $biaya1->biaya;

        return view('privatesiswa.edit-minatjur',compact('biaya','minat','biodata','asalsekolah'));
    }

    public function update1(Request $request, $id){
        $minat = minatjurusan::findorfail($id);
        $minat->update($request->all());
        return redirect('/asalsekolah');
    }

    // asalsekolah
    public function edit2($id){
        $provinces = Province::all();
        $asalsekolah = asalsekolah::findorfail($id);

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;

        $biaya1 = pengguna::where('email', auth()->user()->email)->first();
        $biaya = $biaya1->biaya;

        return view('privatesiswa.edit-asalsekolah',compact('biaya','provinces','asalsekolah','biodata','minat'));
    }

    public function update2(Request $request, $id){
        $asalsekolah = asalsekolah::findorfail($id);
        $asalsekolah->update($request->all());
        return redirect('/ortu');
    }

    // ortu
    public function edit3($id){
        $ortu = ortu::findorfail($id);

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;

        $biaya1 = pengguna::where('email', auth()->user()->email)->first();
        $biaya = $biaya1->biaya;

        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        return view('privatesiswa.edit-ortu',compact('ortu','biaya','asalsekolah','biodata','minat'));
    }

    public function update3(Request $request, $id){
        $ortu = ortu::findorfail($id);
        $ortu->update($request->all());
        return redirect('/dokumen');
    }

    public function edit4($id){
        $wali = wali::findorfail($id);

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;

        $biaya1 = pengguna::where('email', auth()->user()->email)->first();
        $biaya = $biaya1->biaya;

        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        return view('privatesiswa.edit-wali',compact('wali','biaya','asalsekolah','biodata','minat'));
    }

    public function update4(Request $request, $id){
        $wali = wali::findorfail($id);
        $wali->update($request->all());
        return redirect('/dokumen');
    }

    public function edit5($id){
        $dokumen = dokumengambar::findorfail($id);

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;

        $biaya1 = pengguna::where('email', auth()->user()->email)->first();
        $biaya = $biaya1->biaya;

        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        $ortu1 = pengguna::where('email', auth()->user()->email)->first();
        $ortu = $ortu1->ortu;

        return view('privatesiswa.edit-dokumen',compact('ortu','dokumen','biaya','asalsekolah','biodata','minat'));
    }

    public function update5(Request $request, $id){
        $dokumen = dokumengambar::findorfail($id);
        // $dokumen->update($request->all());

        $data = [
            'gambar1' => 'image|file|max:20000',
            'gambar2' => 'image|file|max:20000',
            'gambar3' => 'image|file|max:20000',
            'gambar4' => 'image|file|max:20000',
            // 'pengguna' => pengguna::where('email',auth()->user()->email)->first()->id,
        ];
        
        $validateData = $request->validate($data);

        if ($request->file('gambar1')) {
            if ($request->oldImage) {
                storage::delete($request->oldImage);
            }
            $validateData['gambar1'] = $request->file('gambar1')->store('images');
        }
        if ($request->file('gambar2')) {
            if ($request->oldImage1) {
                storage::delete($request->oldImage1);
            }
            $validateData['gambar2'] = $request->file('gambar2')->store('images');
        }
        if ($request->file('gambar3')) {
            if ($request->oldImage2) {
                storage::delete($request->oldImage2);
            }
            $validateData['gambar3'] = $request->file('gambar3')->store('images');
        }
        if ($request->file('gambar4')) {
            if ($request->oldImage3) {
                storage::delete($request->oldImage3);
            }
            $validateData['gambar4'] = $request->file('gambar4')->store('images');
        }

        dokumengambar::where('id', $dokumen->id)->update($validateData);


        return redirect('/persyaratan');
    }

    // biaya
    public function edit6($id){
        $biaya = persyaratan::findorfail($id);

        $biodata1 = pengguna::where('email', auth()->user()->email)->first();
        $biodata = $biodata1->biodatasiswa;

        $minat1 = pengguna::where('email', auth()->user()->email)->first();
        $minat = $minat1->minatjurusan;

        $asalsekolah1 = pengguna::where('email', auth()->user()->email)->first();
        $asalsekolah = $asalsekolah1->asalsekolah;

        $wali1 = pengguna::where('email', auth()->user()->email)->first();
        $wali = $wali1->wali;

        return view('privatesiswa.edit-biaya',compact('wali','biaya','asalsekolah','biodata','minat'));
    }

    public function update6(Request $request, $id){
        $biaya = persyaratan::findorfail($id);
        $biaya->update($request->all());
        return redirect('/Privatecs');
    }
}
