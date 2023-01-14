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
          <div class="col-sm-4 col-lg-3 mx-auto pt-0  ">
          <div class="navbar-nav fw-semibold text-center  " style="margin-left: -35%;" >
          <a class="nav-link navnaw2 text-light col-lg-3"aria-current="page" href="/Privatecs">Pendaftaran</a>
          <a class="nav-link navnaw2 text-light col-lg-4"  href="/pembayaran">Pembayaran</a>
          <a class="nav-link active navnaw lebar text-light col-lg-2" href="/jadwal">Jadwal</a>
          <a class="nav-link navnaw2 text-light col-lg-4" href="/hasil">Hasil Seleksi</a>
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
  
  

   
   

      



<div class="col-sm-10 rounded-4 p-3 mx-auto mt-3 " style="background-color: #f0f0f0;">
  <div style="margin-bottom: -15%;">
    <svg class="rounded-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="1" d="M0,64L20,96C40,128,80,192,120,202.7C160,213,200,171,240,170.7C280,171,320,213,360,218.7C400,224,440,192,480,149.3C520,107,560,53,600,42.7C640,32,680,64,720,74.7C760,85,800,75,840,90.7C880,107,920,149,960,154.7C1000,160,1040,128,1080,122.7C1120,117,1160,139,1200,138.7C1240,139,1280,117,1320,106.7C1360,96,1400,96,1420,96L1440,96L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>
</div>  
<div class="col-sm-10 rounded-4 py-5 px-3 mx-auto mt-3 border border-light" style="opacity: 99%; backdrop-filter:blur(12px)" >
  <div class="col-sm-11 mx-auto p-4 shadow rounded-4" style="background-color: #f6f6f6">
    <div class="col-sm-4" style="margin-top: -5%;">
      <h6 class="text-light text-center py-2 rounded-3" style="background-color: #0099cc;">JADWAL</h6>
    </div>
    <div class=" col-sm-12">
    <div class="float-end">
    <a href="/isidata" class="btn buttonoutline  m-2 col-sm-11 "><i class="fa-solid fa-file-arrow-down me-2"></i>UNDUH JADWAL</a>
  </div>
  
    <table class="table table-striped rounded-3 text-center" style="background-color:#efefef;">
        <th class="text-secondary">NAMA CALON SISWA</th>
        <th class="text-secondary">NISN</th>
        <th class="text-secondary">JURUSAN</th>
  
        <tr>
          <td class="text-secondary">Aldi Andrian</td>
          <td class="text-secondary">005652823</td>
          <td class="text-secondary">Animasi</td>
        </tr>
    </table>
  </div>
</div>
</div>
<div style="margin-top: -20%;">
  <svg class="rounded-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="1" d="M0,0L21.8,21.3C43.6,43,87,85,131,90.7C174.5,96,218,64,262,96C305.5,128,349,224,393,240C436.4,256,480,192,524,154.7C567.3,117,611,107,655,122.7C698.2,139,742,181,785,213.3C829.1,245,873,267,916,245.3C960,224,1004,160,1047,133.3C1090.9,107,1135,117,1178,149.3C1221.8,181,1265,235,1309,213.3C1352.7,192,1396,96,1418,48L1440,0L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
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

