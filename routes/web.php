<?php

use App\Models\User;
use App\Models\pengguna;
use App\Models\Biodatasiswa;
use App\Http\Controllers\admin;
use App\Http\Controllers\isidata;
use App\Http\Controllers\kepsek;
use App\Http\Controllers\keuangan;
use App\Http\Controllers\tatausaha;
use App\Http\Controllers\regislogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\privatesiswa;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\RedircetController;
use App\Http\Controllers\SiswaControllers;
use FontLib\Table\Type\name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// public page
Route::get('/', [UtamaController::class, 'index']);
Route::get('/kompe', [UtamaController::class, 'kompe']);
Route::get('/pendaftaran', [UtamaController::class, 'pendaftaran']);
// akhir public page

Route::get('/daftar', [regislogin::class, 'regist'])->middleware('guest');
Route::post('/daftar', [regislogin::class, 'create']);

Route::get('/masuk', [regislogin::class, 'login'])->name('login')->middleware('guest');
Route::post('/masuk', [regislogin::class, 'gas']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/admin', [admin::class, 'admin']);
    Route::post('/admin', [admin::class, 'dologin']);
});

// Route::group(['middleware' => 'auth:pengguna'], function () {
// Route::get('/redirect', [RedircetController::class, 'cek1']);
// });

route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function () {
    Route::get('/redirect', [RedircetController::class, 'cek']);
});
Route::post('/logout', [regislogin::class, 'keluar']);

// calon siswa
route::group(['middleware' => ['auth:pengguna']], function () {
Route::get('/Privatecs', [privatesiswa::class, 'calonsiswa']);
Route::get('/hasil', [privatesiswa::class, 'hasilseleksi']);
Route::get('/hasil', [privatesiswa::class, 'hasilseleksi']);

Route::get('/isidata', [privatesiswa::class, 'isidata']);
Route::post('/isidata', [isidata::class, 'isi']);
Route::get('/edit-isidata/{id}', [privatesiswa::class, 'edit'])->name('edit-isidata');
Route::post('/update-isidata/{id}', [privatesiswa::class, 'update'])->name('update-isidata');


Route::post('/getkabupaten', [privatesiswa::class, 'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [privatesiswa::class, 'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [privatesiswa::class, 'getdesa'])->name('getdesa');

Route::get('/jurusan', [privatesiswa::class, 'minat']);
Route::post('/jurusan', [isidata::class, 'jurusan']);
Route::get('/edit-jurusan/{id}', [privatesiswa::class, 'edit1'])->name('edit-jurusan');
Route::post('/update-jurusan/{id}', [privatesiswa::class, 'update1'])->name('update-jurusan');

Route::get('/asalsekolah', [privatesiswa::class, 'asal']);
Route::post('/asalsekolah', [isidata::class, 'asalsekolah']);
Route::get('/edit-asalsekolah/{id}', [privatesiswa::class, 'edit2'])->name('edit-asalsekolah');
Route::post('/update-asalsekolah/{id}', [privatesiswa::class, 'update2'])->name('update-asalsekolah');

Route::get('/ortu', [privatesiswa::class, 'ortu']);
Route::post('/ortu', [isidata::class, 'ortu']);
Route::get('/edit-ortu/{id}', [privatesiswa::class, 'edit3'])->name('edit-ortu');
Route::post('/update-ortu/{id}', [privatesiswa::class, 'update3'])->name('update-ortu');

Route::get('/dokumen', [privatesiswa::class, 'dokumen']);
Route::post('/dokumen', [isidata::class, 'dokumen']);
Route::get('/edit-dokumen/{id}', [privatesiswa::class, 'edit5'])->name('edit-dokumen');
Route::post('/update-dokumen/{id}', [privatesiswa::class, 'update5'])->name('update-dokumen');

Route::get('/wali', [privatesiswa::class, 'wali']);
Route::post('/wali', [isidata::class, 'wali']);
Route::get('/edit-wali/{id}', [privatesiswa::class, 'edit4'])->name('edit-wali');
Route::post('/update-wali/{id}', [privatesiswa::class, 'update4'])->name('update-wali');

Route::get('/dokumen', [privatesiswa::class, 'dokumen']);
Route::post('/dokumen', [isidata::class, 'dokumen']);

Route::get('/persyaratan', [privatesiswa::class, 'biaya']);
Route::post('/persyaratan', [isidata::class, 'biaya1']);
Route::get('/edit-biaya/{id}', [privatesiswa::class, 'edit6'])->name('edit-biaya');
Route::post('/update-biaya/{id}', [privatesiswa::class, 'update6'])->name('update-biaya');

Route::get('/jadwal', [privatesiswa::class, 'jadwal']);

Route::get('/pembayaran', [privatesiswa::class, 'pembayaran']);
Route::post('/pembayaran', [isidata::class, 'upload']);

Route::get('/tampilanprofil', [privatesiswa::class, 'tampilanprofil']);

Route::get('/editprofil', [privatesiswa::class, 'editprofil']);
Route::post('/editprofil', [privatesiswa::class, 'updateprofil']);
});
// akhir calon siswa

// keuangan
route::group(['middleware' => ['auth', 'checkrole:1']], function () {
Route::get('/stskeuangan', [keuangan::class, 'status']);
Route::post('/stskeuangan', [keuangan::class, 'Statuskeuangan']);

Route::get('/laporankeuangan', [keuangan::class, 'laporan']);

// Route::get('/tampilanprofil', [privatesiswa::class, 'tampilanprofil']);

// Route::get('/editprofil', [privatesiswa::class, 'editprofil']);
// Route::post('/editprofil', [privatesiswa::class, 'updateprofil']);
});
// akhir keuangan

// Tata Usaha
route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/datasiswa', [tatausaha::class, 'datasiswa']);
//route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/datasiswa', [tatausaha::class, 'datasiswa'])->name('datasiswa');
    Route::get('/hasiltu', [tatausaha::class, 'hasil']);
    Route::get('/laporantu', [tatausaha::class, 'laporan']);
    Route::get('/ujian', [tatausaha::class, 'ujian']);
    Route::get('/datasiswatu', [tatausaha::class, 'datasiswatu']);
    Route::get('/hasilujiantu', [tatausaha::class, 'hasilujiantu']);
    Route::get('/laporanadministrasitu', [tatausaha::class, 'laporanadministrasitu']);
    Route::get('/laporanujiantu', [tatausaha::class, 'laporanujiantu']);
    Route::get('/hasiladministrasitu', [tatausaha::class, 'hasiladministrasitu']);
    Route::get('/aturjadwal', [tatausaha::class, 'aturjadwal']);
    Route::get('/pilihsiswa', [tatausaha::class, 'pilihsiswa']);
    Route::get('/confirmhasilujian', [tatausaha::class, 'confirm_hasilujian']);

//     Route::get('/tampilanprofil', [privatesiswa::class, 'tampilanprofil']);

// Route::get('/editprofil', [privatesiswa::class, 'editprofil']);
// Route::post('/editprofil', [privatesiswa::class, 'updateprofil']);
});
//});
// akhir Tata usaha

// kepsek
route::group(['middleware' => ['auth', 'checkrole:3']], function () {
Route::get('/kepsek', [kepsek::class, 'kepsek']);
Route::get('/persetujuanujian', [kepsek::class, 'persetujian']);
Route::get('/laporanadminkepsek', [kepsek::class, 'laporanadministrasi']);
Route::get('/laporanujiankepsek', [kepsek::class, 'laporanujian']);

// Route::get('/tampilanprofil', [privatesiswa::class, 'tampilanprofil']);

// Route::get('/editprofil', [privatesiswa::class, 'editprofil']);
// Route::post('/editprofil', [privatesiswa::class, 'updateprofil']);
});
// akhir kepsek


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
