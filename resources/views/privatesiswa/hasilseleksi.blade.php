<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB BAKTI NUSANTARA 666</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/projek.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="shortcut icon" href="img/logonibg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
          <div class="col-sm-4 col-lg-3 mx-auto pt-0 ">
            <div class="navbar-nav fw-semibold text-center  " style="margin-left: -35%;" >
          <a class="nav-link navnaw2 text-light col-lg-3"aria-current="page" href="/Privatecs">Pendaftaran</a>
          <a class="nav-link navnaw2 text-light col-lg-4"  href="/pembayaran">Pembayaran</a>
          <a class="nav-link navnaw2 text-light col-lg-2" href="/jadwal">Jadwal</a>
          <a class="nav-link active navnaw lebar text-light col-lg-4" href="/hasil">Hasil Seleksi</a>
          </div>
          </div>


    

    <div class=" dropdown">
      <button type="button" class="btn dropdown show p-0 me-5" style="border: gray;" data-bs-toggle="dropdown" aria-expanded="false">
        <span><img src="img/default.png"   alt="" width="40"></span>
      </button>
      <div class=" position-absolute  ">
      <ul class="dropdown-menu translate-middle-x mt-4 me-5 " >
        <li class="dropdown-header" href="#"><a>@auth{{ auth()->user()->email }}@endauth</a></li>
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
  

   
   

      
<div class="col-sm-8 col-lg-11 rounded-4 p-3 mx-auto mt-3 " style="background-color: #f0f0f0;">
  <div style="margin-bottom: -15%;">
    <svg class="rounded-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="1" d="M0,192L20,208C40,224,80,256,120,234.7C160,213,200,139,240,122.7C280,107,320,149,360,160C400,171,440,149,480,144C520,139,560,149,600,133.3C640,117,680,75,720,53.3C760,32,800,32,840,80C880,128,920,224,960,229.3C1000,235,1040,149,1080,122.7C1120,96,1160,128,1200,128C1240,128,1280,96,1320,85.3C1360,75,1400,85,1420,90.7L1440,96L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>
</div>  
<div class="col-sm-10 col-lg-11 rounded-4 py-5 px-3 mx-auto mt-3 border border-light" style="opacity: 99%; backdrop-filter:blur(12px)" >
  <div class="col-sm-11 mx-auto p-4 shadow rounded-4" style="background-color: #f6f6f6">
    <div class="col-lg-12">
      <form action="" method="GET">
        <div class="col-lg-12 border-bottom border-2">
        <h3 class="">{{-- nama siswa --}} Aldi Andrian</h3>
        <small class="me-2 text-secondary">NISN :{{-- NISN siswa --}} 090839</small>
        <small class="mx-2 text-secondary">Jurusan :{{-- NISN siswa --}} Animasi</small>
      </div>

      <div class="row">
      <div class="col-lg-6 mt-2">
        <h5 class="text-center">Hasil Seleksi Administrasi</h5>
        <table class="table table-striped ">
          <th class="text-center">Persyaratan</th>
          <th class="text-center">Keterangan</th>
          <tr class="text-center">
            <td>Data Diri</td>
            <td>{{-- backend nilai --}}Lengkap</td>
          </tr>
          <tr class="text-center">
            <td>Minat Jurusan</td>
            <td>{{-- backend nilai --}}Lengkap</td>
          </tr>
          <tr class="text-center">
            <td>Data Sekolah</td>
            <td>{{-- backend nilai --}}Lengkap</td>
          </tr>
          <tr class="text-center">
            <td>Data Orang Tua</td>
            <td>{{-- backend nilai --}}Lengkap</td>
          </tr>
          <tr class="text-center">
            <td>Dokumen Persyaratan</td>
            <td>{{-- backend nilai --}}Lengkap</td>
          </tr>
          <tr class="text-center">
            <td>Biaya Pendidikan</td>
            <td>{{-- backend nilai --}}Lengkap</td>
          </tr>
        </table>
      </div>

      {{-- seleksi ujian --}}
      <div class="col-lg-6 mt-2">
        <h5 class="text-center">Hasil Seleksi Ujian</h5>
        <table class="table table-striped ">
          <th class="text-center">Mata Pelajaran</th>
          <th class="text-center">Nilai Akhir</th>
          <th class="text-center">Keterangan</th>
          <tr class="text-center">
            <td>B.Inggris</td>
            <td>{{-- backend nilai --}}83</td>
            <td>{{-- keterangan --}}Lulus</td>
          </tr>
          <tr class="text-center">
            <td>Matematika</td>
            <td>{{-- backend nilai --}}83</td>
            <td>{{-- backend nilai --}}Lulus</td>
          </tr>
          <tr class="text-center">
            <td>B.Indonesia</td>
            <td>{{-- backend nilai --}}83</td>
            <td>{{-- backend nilai --}}Lulus</td>
          </tr>
          <tr class="text-center">
            <td>IPA</td>
            <td>{{-- backend nilai --}}83</td>
            <td>{{-- backend nilai --}}Lulus</td>
          </tr>
          <tr class="text-center">
            <td>KKM</td>
            <td colspan="2">{{-- backend nilai KKM  --}}75</td>
          </tr>
          <tr class="text-center">
            <td>Nilai rata rata</td>
            <td colspan="2">{{-- backend nilai rata rata--}}84,75</td>
          </tr>
        </table>
      </div>
    </div>
      </form>
    </div>
</div>
</div>
<div style="margin-top: -15%;">
  <svg class="rounded-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="1" d="M0,128L12.6,117.3C25.3,107,51,85,76,96C101.1,107,126,149,152,138.7C176.8,128,202,64,227,64C252.6,64,278,128,303,154.7C328.4,181,354,171,379,149.3C404.2,128,429,96,455,106.7C480,117,505,171,531,186.7C555.8,203,581,181,606,186.7C631.6,192,657,224,682,229.3C707.4,235,733,213,758,192C783.2,171,808,149,834,149.3C858.9,149,884,171,909,149.3C934.7,128,960,64,985,53.3C1010.5,43,1036,85,1061,112C1086.3,139,1112,149,1137,160C1162.1,171,1187,181,1213,197.3C1237.9,213,1263,235,1288,202.7C1313.7,171,1339,85,1364,53.3C1389.5,21,1415,43,1427,53.3L1440,64L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path></svg>
</div>
</div>
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

