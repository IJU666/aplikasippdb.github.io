<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB BAKTI NUSANTARA 666</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/projek.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="img/logonibg.png" type="image/x-icon">

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
        <a class="nav-link navnaw2 text-light col-lg-4 "aria-current="page" href="/datasiswa">Data Calon Siswa</a>
         <li class="nav-item dropdown navnaw2 lebar col-lg-3 ">
          <a class="nav-link dropdown-toggle text-light p-0  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hasil Seleksi
          </a>
          <ul class="dropdown-menu mt-2">
            <li><a class="dropdown-item" href="hasiladministrasitu">Administrasi</a></li>
            <li><a class="dropdown-item " href="hasilujiantu">Ujian</a></li>
          </ul>
        </li>
        <a class="nav-link navnaw text-light col-lg-2" href="/aturjadwal">Jadwal</a>
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
    
    <form method="" action="" class="g-1 "> 
      <div class="col-lg-8 float-end g-1 row">
      <div class="col-lg-5 mb-2">
        <button type="submit" class="btn buttonoutline float-end mb-1"><i class="fa-solid fa-file-arrow-up me-1"></i>Publikasikan</button>
      </div>
      <!-- Button trigger modal -->
      <div class="col-lg-4 float-end">
<button type="button" class="col-lg-7 ms-2 btn button2 mb-1 " data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-calendar-days me-1"></i>
  Buat Jadwal
  </button>
</div>
</div> 
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Jadwal</h1>
        </div>
        <div class="modal-body">
  
          <div class="mb-3 row">
            <label for="namakegiatan" class="col-lg-4 col-md-6 col-form-label">Nama Kegiatan</label>
            <div class="col-lg-8 col-md-10">
              <input type="text" name="namakegiatan" required value="{{ old('namakegiatan') }}" autofocus  id="namakegiatan" placeholder="Masukan Nama Kegiatan" class="form-control col-lg-9" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="waktu" class="col-lg-4 col-md-6 col-form-label">Waktu Kegiatan</label>
            <div class="row col-lg-8 col-md-10 ">
              <div class="col-6">
              <input type="date" class="form-control" id="waktu" name="waktukegiatan" required value="{{ old('waktukegiatan') }}"   placeholder="">
              </div>
              <div class="col-6">
              <input type="time" class="form-control" id="waktu" name="waktukegiatan" required value="{{ old('waktukegiatan') }}"   placeholder="">
            </div>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn py-1 px-3" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn button1 py-1 px-3">Simpan</button>
        </div>
      </div>
    </div>
  </div>

    </form>
  
  <div class="col-lg-6 mx-auto">
    <table class="table table-striped rounded-3 text-center shadow mb-3">
      <th>NO</th>
      <th>JADWAL</th>
      <th>AKSI</th>

      <tr>
        <td>1</td>
        <td>Gelombang 1</td>
        <td>
         <a href="/pilihsiswa" class="btn button1 px-3 py-1">Pilih Calon Siswa</a>
        </td>
      </tr>

      <tr>
        <td>2</td>
        <td>Gelombang 2</td>
        <td>
         <a href="/pilihsiswa" class="btn button1 px-3 py-1">Pilih Calon Siswa</a>
        </td>
      </tr>

      <tr>
        <td>3</td>
        <td>Gelombang 3</td>
        <td>
         <a href="/pilihsiswa" class="btn button1 px-3 py-1">Pilih Calon Siswa</a>
        </td>
      </tr>

      <tr>
        <td>4</td>
        <td>Gelombang 4</td>
        <td>
         <a href="/pilihsiswa" class="btn button1 px-3 py-1">Pilih Calon Siswa</a>
        </td>
      </tr>
            </table>
 
          </div>
        </div>

        
  {{-- footer --}}

  <div class="footer col-12 mt-5">
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