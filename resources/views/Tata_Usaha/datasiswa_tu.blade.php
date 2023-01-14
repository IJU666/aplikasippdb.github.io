<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB BAKTI NUSANTARA 666</title>
    <link rel="shortcut icon" href="img/logonibg.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/projek.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg mb-4 p-0  " style="background-color: #2070ad;  ">
      <div class="container-fluid ">
   
        <a class="navbar-brand" ><img src="img/bnnew.png" alt="" width="70" class="img-fluid ms-5 "></a>
        <a class="navbar-brand fw-semibold text-light "></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="col-lg-4 mx-auto ps-4 pt-0 " >
          <div class="navbar-nav fw-semibold text-center " style="margin-left: -25%">
        <a class="nav-link navnaw text-light col-lg-4 "aria-current="page" href="/datasiswa">Data Calon Siswa</a>
         <li class="nav-item dropdown navnaw2 lebar col-lg-3 ">
          <a class="nav-link dropdown-toggle text-light p-0  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hasil Seleksi
          </a>
          <ul class="dropdown-menu mt-2">
            <li><a class="dropdown-item" href="hasiladministrasitu">Administrasi</a></li>
            <li><a class="dropdown-item " href="hasilujiantu">Ujian</a></li>
          </ul>
        </li>
        <a class="nav-link navnaw2 text-light col-lg-2" href="/aturjadwal">Jadwal</a>
        <li class="nav-item dropdown navnaw2 lebar col-lg-2">
          <a class="nav-link dropdown-toggle text-light ms-2 p-0 text-center " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laporan
          </a>
          <ul class="dropdown-menu mt-2">
            <li><a class="dropdown-item" href="laporanadministrasitu">Administrasi</a></li>
            <li><a class="dropdown-item" href="laporanujiantu">Ujian</a></li>
          </ul>
        </li>
      </div>
      </div>


    

    <div class=" dropdown">
      <button type="button" class="btn dropdown show p-0 me-5" style="border: gray;" data-bs-toggle="dropdown" aria-expanded="false">
        <span><img src="img/default.png"   alt="" width="40"></span>
      </button>
      <div class=" position-absolute  ">
      <ul class="dropdown-menu translate-middle-x mt-4 me-5 " >
        <li class="dropdown-header" href="#"><a>@auth{{ auth()->user()->username }}@endauth</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="/tampilanprofil"><i class="fa-regular fa-user me-2"></i>Profil</a></li>
        <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket me-1"></i> Keluar</button>
          </form>
        </li>
      </ul>
    </div>

</div>
</div>
    </div>
  </nav>

<div class="col-sm-10 col-md-11 col-lg-11 rounded-3 mx-auto py-4 mt-5 bg-light">
  <div class="float-end col-lg-4">
    <form action="{{ url('datasiswa') }}" method="GET" class="row g-3 ms-5">
      {{-- @csrf  --}}
      <div class="col-lg-7">
        <input type="search" name="search" class="form-control" id="inputPassword2" placeholder="Cari Siswa" value="{{ request('search') }}">
      </div>
      <div class="col-lg-4">
        <button type="submit" class="btn btn-outline-success mb-3"><i class="fa-solid fa-magnifying-glass me-1"></i>Cari</button>
      </div>
    </form>
  </div>
  <div class="col-lg-11 mx-auto">
    <table class="table table-striped rounded-3 text-center shadow">
      <th>NO</th>
      <th>NAMA CALON SISWA</th>
      <th>DATA DIRI</th>
      <th>MINAT JURUSAN</th>
      <th>DATA SEKOLAH</th>
      <th>DATA ORANG TUA</th>
      <th>DOKUMEN PERSYARATAN</th>
      <th>UNDUH DATA</th>
      <div class="mx-5">


        {{-- badkend dimulai --}}
        @foreach ($dtSiswa as $item)
        <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $biodata_lengkap?"Sudah Lengkap":"Belum Lengkap"; }}</td>
        <td>{{ $minat_lengkap?"Sudah Lengkap":"Belum Lengkap"; }}</td>
        <td>{{ $asalsekolah_lengkap?"Sudah Lengkap":"Belum Lengkap"; }}</td>
        <td>{{ $ortu_lengkap?"Sudah Lengkap":"Belum Lengkap"; }}</td>
        <td>{{ $biaya_lengkap?"Sudah Lengkap":"Belum Lengkap"; }}</td>
        <!-- Button trigger modal -->
        <td><button type="submit" class=" btn button1 my-auto">Unduh</button></td> 
      </tr>
      @endforeach
        </div>
          </div>
          </div>
        </tr>
                {{-- akhir backend --}}
            </table>
          </div>
        </div>





  {{-- footer --}}

  <div class="footer col-12 mt-4">
    <div class="ms-5">
    <div class="d-flex ms-5 pt-2">
      <div class="col-3 d-flex ms-3">
    <div>
    <img src="img/logonibg.png" alt="" width="100" class="img-fluid mt-3">
  </div>
    <div class="ms-2 col-sm-9 mt-3">
      <h6 class="text-light">SMK BAKTI NUSANTARA 666</h6>
      <div class="ms-5 text-light fw-semibold col-sm-2">"SAJUTA"</div>
      <div class="ms-3">
        <small class="text-light">Santun | Jujur  | Taat</small> 
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-3 ms-5">
    <div class="text-light"><h6>Informasi</h6></div>
    <div class="text-light border-top col-sm-10">Jl. Percobaan no 65 Cileunyi, Kab. Bandung</div>
    <div class="text-light">(022) 6373220</div>
    <div class="text-light">baknus@smkbn666.sch.id</div>
  </div>
  <div class="col-sm-4 mt-3 ms-3">
    <div class="text-light"><h6>Link Terkait</h6></div>
    <div class="border-top col-sm-5"><a href="http://lms.smkbn666.sch.id/" class="text-light " style="text-decoration: none;">E - Learning</a></div>
    <div><a href="http://dtcenter.smkbn666.sch.id/login" class="text-light" style="text-decoration: none;">Data Center</a></div>
    <div><a href="http://prakerin.smkbn666.sch.id/" class="text-light" style="text-decoration: none;">Prakerin</a></div>
  </div>
</div>
</div>
<div class="border border-white mt-2"></div>
<div class="d-flex justify-content-center mt-4">
  <div class="btn btn-primary mx-1 rounded-5"><a href="https://www.instagram.com/smkbaktinusantara666/?utm_medium=copy_link" class="text-light" style="text-decoration: none;"><i class="fa-brands fa-instagram"></i></a></div>
  <div class="btn btn-primary mx-1 rounded-5"><a href="https://www.youtube.com/channel/UCeau77A8QQ5BClDXHzcmftA" class="text-light"><i class="fa-brands fa-youtube"></a></i></div>
  <div class="btn btn-primary mx-1 rounded-5"><a href="https://www.facebook.com/Smkbn666/" class="text-light"><i class="fa-brands fa-facebook"></a></i></div>
</div>
<div class="text-light text-center mt-3">
<small><i class="fa-solid fa-copyright"></i> Copyright. All rights reserved</small>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>