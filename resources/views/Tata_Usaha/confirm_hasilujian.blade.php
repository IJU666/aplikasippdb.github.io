<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB BAKTI NUSANTARA 666</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/projek.css">
    <link rel="shortcut icon" href="img/logonibg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  </head>
  <body>
    <div class="border-bottom border-dark">
    <div class="ms-3">
    <nav class="navbar navbar-expand-lg bg-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/logonibg.png" alt="" width="94" class="img-fluid ms-2"></a>
        <div class="d-block ms-3">
        <h3 class="fw-bold fst-italic">SMK BAKTI NUSANTARA 666</h3>
        <h5 class="fw-bolder fst-italic text-warning">Humanis, Edukatif, Karakteristik</h5>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-4 " id="navbarNavAltMarkup" >
          <div class="ms-auto mt-2 ">
          <div class="navbar-nav fw-bolder ">
            <a class="nav-link  " aria-current="page" href="/datasiswatu">Data Calon Siswa</a>
           {{-- dropdown tu --}}
           <div class="dropdown">
            <button class="btn border-0 dropdown-toggle fw-semibold fst-italic" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hasil Seleksi
            </button>
            <ul class="dropdown-menu translate-middle-x">
              <li><a class="dropdown-item" href="/hasiladministrasitu">Administrasi</a></li>
              <li><a class="dropdown-item" href="/hasilujiantu">Ujian</a></li>
            </ul>
          </div>
          <a class="nav-link " href="/aturjadwal">Jadwal</a>
          <div class="dropdown">
            <button class="btn border-0 dropdown-toggle fw-semibold fst-italic" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Laporan
            </button>
            <ul class="dropdown-menu translate-middle-x">
              <li><a class="dropdown-item" href="/laporanadministrasitu">Administrasi</a></li>
              <li><a class="dropdown-item" href="/laporanujiantu">Ujian</a></li>
            </ul>
          </div>
          {{-- akhir dropdown --}}
       </div>    
          </div>
          <div class=" dropdown ">
            <button type="button" class="btn dropdown-toggle show  border-light" data-bs-toggle="dropdown" aria-expanded="false">
              <span><img src="img/default.png" alt="" width="40"></span>
            </button>
            <div class=" position-absolute mt-2">
            <ul class="dropdown-menu translate-middle-x mx-auto mt-2 me-5">
              <li class="dropdown-header" href="#"><a>@auth{{ auth()->user()->username }}@endauth</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user me-2"></i>Ubah Profil</a></li>
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
  </div>
</div>


<div class=" ms-4 col-4 " >
    <h2 class=" p-3 fw-bold mt-5" style="color: #0086B3;">Hasil Seleksi Ujian</h2>
  </div>
<!-- Content -->
<div class="bck-abu  mx-auto rounded-3 mb-4 px-5 py-5">
          <div class="text-start mx-4">
            <form action="" method="post">
            <table>
              <tr class="my-1 fs-5 ">
                <td class="px-3">Nama Calon Siswa</td>
                <td >:</td>
                <td>{{-- backend --}}</td>
              </tr>
              <tr class="my-1 ">
                <td class="fs-5 px-3">BTQ</td>
                <td class="fs-5">:</td>
                <td>
                  <div class="d-flex  col-12 mx-auto ms-2  mt-1 ">
                    <div class="form-check mx-1">
                      <input class="form-check-input" type="radio" name="radiobtq" id="btq1" checked>
                      <label class="form-check-label" for="btq1">
                        Lulus
                      </label>
                    </div>
                    <div class="form-check mx-4">
                      <input class="form-check-input" type="radio" name="radiobtq" id="btq2"
                      <label class="form-check-label" for="btq2">
                        Tidak Lulus
                      </label>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="my-1">  
                <td class="fs-5 px-3">Kesehatan</td>
                <td class="fs-5">:{{-- backend --}}</td>
                <td>
                   <div class="d-flex  col-12 mx-auto ms-2 mt-1">
                  <div class="form-check mx-1">
                    <input class="form-check-input" type="radio" name="radiokesehatan" id="kesehatan1"checked>
                    <label class="form-check-label" for="kesehatan1">
                     Lulus
                    </label>
                  </div>
                  <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radiokesehatan" id="kesehatan2" 
                    <label class="form-check-label" for="kesehatan2">
                      Tidak Lulus
                    </label>
                  </div>
                </td>
              </tr>
              <tr class="my-1">  
                <td class="fs-5 px-3">Fisik</td>
                <td class="fs-5">:{{-- backend --}}</td>
                <td>
                  <div class="d-flex  col-12 mx-auto ms-2  mt-1">
                    <div class="form-check mx-1">
                      <input class="form-check-input" type="radio" name="radiofisik" id="fisik1"  checked>
                      <label class="form-check-label" for="fisik1">
                        Lulus
                      </label>
                    </div>
                    <div class="form-check mx-4">
                      <input class="form-check-input" type="radio" name="radiofisik" id="fisik2" >
                      <label class="form-check-label" for="fisik2">
                        Tidak Lulus
                      </label>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="my-1">  
                <td class="fs-5 px-3">Akademik</td>
                <td class="fs-5">:{{-- backend --}}</td>
                <td>
                  <div class="d-flex  col-12 mx-auto ms-2  mt-1">
                    <div class="form-check mx-1">
                      <input class="form-check-input" type="radio" name="radioakademik" id="akademik1"  checked>
                      <label class="form-check-label" for="akademik1">
                        Lulus
                      </label>
                    </div>
                    <div class="form-check mx-4">
                      <input class="form-check-input" type="radio" name="radioakademik" id="akademik2" >
                      <label class="form-check-label" for="akademik2">
                        Tidak Lulus
                      </label>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="my-1">
                <td class="fs-5 px-3">Keputusan</td>
                <td class="fs-5">:{{-- backend --}}</td>
                <td>
                    <select name="" id="" class="rounded-2   ps-1 px-3 py-1" style="margin-left: 5%;">
                        <option value="">Lulus</option>
                        <option value="">Tidak Lulus</option>
                      </select>
                </td>
              </tr>
            </table>
          </div>
             
              <div class="float-end me-3 " >
                <button type="submit" name="" class="btn button1 py-1 px-4 rounded-3">Simpan</button>
              </div>
               
          </div>
        </form>




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
    <div class="text-light">(002) 6373220</div>
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

</body>
</html>