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
        <a class="nav-link navnaw2 text-light col-lg-4 "aria-current="page" href="/datasiswa">Data Calon Siswa</a>
         <li class="nav-item dropdown navnaw lebar col-lg-3 ">
          <a class="nav-link dropdown-toggle text-light p-0  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hasil Seleksi
          </a>
          <ul class="dropdown-menu mt-2">
            <li><a class="dropdown-item " style="background-color: #e0e0e0;" href="hasiladministrasitu">Administrasi</a></li>
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
    <form method="" action="" class="row g-3 ms-5">  
      <div class="col-lg-10">
        <button type="submit" class="btn button1 mb-3 float-end"><i class="fa-solid fa-upload me-1 my-auto"></i>Meminta Persetujuan</button>
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
        <td class="text-danger">BELUM LULUS{{-- backend --}}</td>
        <td class="text-success">LULUS{{-- backend --}}</td>
        <td class="text-success">LULUS {{-- backend --}}</td>
        <td class="text-success">LULUS {{-- backend --}}</td>
        <td class="text-success">LULUS {{-- backend --}}</td>
             <!-- Button trigger modal -->
        <td><button class="button1 rounded-3 py-1 px-3"  style="border: none; text-decoration:none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight-{{ $item->id }}" aria-controls="offcanvasRight">Hasil Seleksi</button>

          <div class="offcanvas offcanvas-end col-sm-5" tabindex="-1" id="offcanvasRight-{{ $item->id }}" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasRightLabel">Hasil Seleksi Administrasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div style="margin-bottom: -18%;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="0.3" d="M0,320L18.5,320C36.9,320,74,320,111,277.3C147.7,235,185,149,222,122.7C258.5,96,295,128,332,128C369.2,128,406,96,443,122.7C480,149,517,235,554,240C590.8,245,628,171,665,149.3C701.5,128,738,160,775,170.7C812.3,181,849,171,886,154.7C923.1,139,960,117,997,106.7C1033.8,96,1071,96,1108,117.3C1144.6,139,1182,181,1218,202.7C1255.4,224,1292,224,1329,224C1366.2,224,1403,224,1422,224L1440,224L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path></svg></div>
            <div class="offcanvas-body">
              <div class="bg-light rounded-3 p-3 pb-5 shadow">
                <div class="mt-3">
                <h5 class="form-control shadow">{{ $item->nama }}</h5>
              </div>
              {{-- radio button data diri --}}
              <form action="" method="">
              <div class="mb-2 mt-3 text-start">
                <label for="disabledTextInput" class="form-label">Data Diri</label>
              <div class="col-lg-12 row ms-3">
                <div class="form-check form-check-inline col-lg-2">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Lulus">
                  <label class="form-check-label" for="inlineRadio1">Lulus</label>
                </div>
                <div class="form-check form-check-inline col-lg-6">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Tidak Lulus">
                  <label class="form-check-label" for="inlineRadio2">Tidak Lulus</label>
                </div>
              </div>
            </div>
          </form>
          {{-- akhir data diri --}}


          {{-- minat jurusan --}}
          <form action="" method="">
            <div class="mb-2 mt-1 text-start">
              <label for="disabledTextInput" class="form-label">Minat Jurusan</label>
            <div class="col-lg-12 row ms-3">
              <div class="form-check form-check-inline col-lg-2">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Lulus">
                <label class="form-check-label" for="inlineRadio1">Lulus</label>
              </div>
              <div class="form-check form-check-inline col-lg-6">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Tidak Lulus">
                <label class="form-check-label" for="inlineRadio2">Tidak Lulus</label>
              </div>
            </div>
          </div>
        </form>
        {{-- akhir minat jurusan --}}

        {{-- Data Sekolah --}}
        <form action="" method="">
          <div class="mb-2 mt-1 text-start">
            <label for="disabledTextInput" class="form-label">Data Sekolah</label>
          <div class="col-lg-12 row ms-3">
            <div class="form-check form-check-inline col-lg-2">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Lulus">
              <label class="form-check-label" for="inlineRadio1">Lulus</label>
            </div>
            <div class="form-check form-check-inline col-lg-6">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Tidak Lulus">
              <label class="form-check-label" for="inlineRadio2">Tidak Lulus</label>
            </div>
          </div>
        </div>
      </form>
        {{-- akhir data sekolah --}}


        {{-- data orang tua --}}
        <form action="" method="">
          <div class="mb-2 mt-1 text-start">
            <label for="disabledTextInput" class="form-label">Data Orang Tua</label>
          <div class="col-lg-12 row ms-3">
            <div class="form-check form-check-inline col-lg-2">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Lulus">
              <label class="form-check-label" for="inlineRadio1">Lulus</label>
            </div>
            <div class="form-check form-check-inline col-lg-6">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Tidak Lulus">
              <label class="form-check-label" for="inlineRadio2">Tidak Lulus</label>
            </div>
          </div>
        </div>
      </form>
        {{-- akhir data orang tua --}}


        {{-- dokumen persyaratan --}}
        <form action="" method="">
          <div class="mb-2 mt-1 text-start">
            <label for="disabledTextInput" class="form-label">Dokumen Persyaratan</label>
          <div class="col-lg-12 row ms-3">
            <div class="form-check form-check-inline col-lg-2">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Lulus">
              <label class="form-check-label" for="inlineRadio1">Lulus</label>
            </div>
            <div class="form-check form-check-inline col-lg-6">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Tidak Lulus">
              <label class="form-check-label" for="inlineRadio2">Tidak Lulus</label>
            </div>
          </div>
        </div>
      </form>
        {{-- akhir data persyartan --}}


        {{-- Biaya --}}
        <form action="" method="">
          <div class="mb-2 mt-1 text-start">
            <label for="disabledTextInput" class="form-label">Biaya</label>
          <div class="col-lg-12 row ms-3">
            <div class="form-check form-check-inline col-lg-2">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Lulus">
              <label class="form-check-label" for="inlineRadio1">Lulus</label>
            </div>
            <div class="form-check form-check-inline col-lg-6">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Tidak Lulus">
              <label class="form-check-label" for="inlineRadio2">Tidak Lulus</label>
            </div>
          </div>
        </div>
      </form>
        {{-- Akhir Biaya --}}
              <div class="col-lg-12 text-start ms-1  ">
                <label for="disabledTextInput" class="form-label">Bukti Pembayaran </label>
                <button type="button" class="form-control text-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                 bukti.jpg {{-- backend nama bukti pembayaran --}}
                </button>
                <div id="disabledTextInput" class="form-text text-center">Klik untuk melihat</div>
                
              </div>
              <form action="" method="post">
              <div class="border rounded-3 col-12 p-3">
              <div class=" col-sm-11 mx-auto">
              <select class="form-select" aria-label="Default select example">
                <option selected>Keputusan</option>
                <option value="Belum Lunas">Tidak Lulus</option>
                <option value="Lunas">Lulus</option>
              </select>
            </div>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn button1 px-5">Simpan</button>
          </div>
        </form>
              </div>
            </div>
            <div style="margin-top: -10%;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="0.3" d="M0,96L34.3,117.3C68.6,139,137,181,206,181.3C274.3,181,343,139,411,149.3C480,160,549,224,617,234.7C685.7,245,754,203,823,160C891.4,117,960,75,1029,53.3C1097.1,32,1166,32,1234,74.7C1302.9,117,1371,203,1406,245.3L1440,288L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
          </div></td> 
       
              </tr>
              </div>

                  <!-- Modal bukti pembayaran -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Bukti Pembayaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="justify-content-centered">
                        <img src="img/bukti.jpeg" width="350" alt="" class="img-fluid justify-content-centered">
                      </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary px-4 py-1" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn buttonoutline px-3 py-1">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                {{-- akhir backend --}}
</td> 
        </tr>
        </div>
          </div>
          </div>
        </tr>
                {{-- akhir backend --}}
                @endforeach
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