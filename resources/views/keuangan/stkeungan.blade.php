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
<nav class="navbar navbar-expand-lg mb-4 p-0 "  style="background-color: #2070ad; ">
  <div class="container-fluid">
   
    <a class="navbar-brand" ><img src="img/bnnew.png" alt="" width="70" class="img-fluid ms-5 "></a>
    <a class="navbar-brand fw-semibold text-light "></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
      <div class="col-sm-3 mx-auto pt-0">
      <div class="navbar-nav fw-semibold text-center " style="margin-left: -15%;">
        <a class="nav-link active navnaw lebar text-light col-lg-8"aria-current="page" href="/stskeuangan">Persetujuan Pembayaran</a>
        <a class="nav-link navnaw2 text-light col-lg-3"  href="/laporankeuangan">Laporan</a>
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
  

          <div class="col-sm-10 rounded-3 mx-auto py-4 mt-3 bg-light">
            <div class="ms-5">
              <form class="row g-3" method="GET" action="/stskeuangan">  
                <div class="col-auto">
                  <input type="search" name="search" class="form-control" id="inputPassword2" placeholder="Cari Siswa" value="{{ request('search') }}">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-outline-success mb-3"><i class="fa-solid fa-magnifying-glass me-1"></i>Cari</button>
                </div>
              </form>
            </div>
                {{-- </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-outline-success mb-3"><i class="fa-solid fa-magnifying-glass me-1"></i>Cari</button>
                  </div>
                </form>
                </div> --}}
            <div class="col-sm-11 mx-auto bg-white shadow">
              <table class="table table-striped table-hover rounded-3 text-center" style="background-color:#efefef;">
                <thead>
                <tr>
                <th class="text-secondary">NO</th>
                <th class="text-secondary">NISN</th>
                <th class="text-secondary">NAMA CALON SISWA</th>
                <th class="text-secondary">PEMBAYARAN</th>
                <th class="text-secondary">WAKTU</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <div class="mx-5">
              
                  {{-- badkend dimulai --}}
                  
                  @foreach ($dtSiswa as $item)
                  
                  <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->Biodatasiswa->nisn }}</td>
                  <td>{{ $item->Biodatasiswa->nama }}</td>
                  <td> LUNAS{{-- backend --}}</td>
                  <td>{{ $item->jampembayaran }}, {{date('d-m-Y', strtotime($item->ttgpembayaran)) }}</td>
                       <!-- Button trigger modal -->
                  <td><button class="button1 rounded-3 py-1 px-3"  style="border: none; text-decoration:none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight{{ $item->id }}" aria-controls="offcanvasRight">Setujui</button>
                    
                  
                    <div class="offcanvas offcanvas-end col-sm-5" tabindex="-1" id="offcanvasRight{{ $item->id }}" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Persetujuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div style="margin-bottom: -10%;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="0.3" d="M0,320L18.5,320C36.9,320,74,320,111,277.3C147.7,235,185,149,222,122.7C258.5,96,295,128,332,128C369.2,128,406,96,443,122.7C480,149,517,235,554,240C590.8,245,628,171,665,149.3C701.5,128,738,160,775,170.7C812.3,181,849,171,886,154.7C923.1,139,960,117,997,106.7C1033.8,96,1071,96,1108,117.3C1144.6,139,1182,181,1218,202.7C1255.4,224,1292,224,1329,224C1366.2,224,1403,224,1422,224L1440,224L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path></svg></div>
                      <div class="offcanvas-body">
                        <div class="bg-light rounded-3 p-3 pb-5 shadow">
                          <div class="mt-3">
                          <h5 class="form-control shadow">{{ $item->Biodatasiswa->nama }}</h5>
                        </div>
                        <div class="mb-2 mt-4 text-start">
                          <label for="disabledTextInput" class="form-label">NISN</label>
                          <h6 class="form-control text-secondary">{{ $item->Biodatasiswa->nisn }}</h6>
                        </div>
                        <div class="">
                          <div class="col-lg-12 text-start">
                            <label for="disabledTextInput" class="form-label">Waktu dan Tanggal</label>
                            <h6 class="form-control text-secondary">{{ $item->jampembayaran }},{{date('d-m-Y', strtotime($item->ttgpembayaran)) }}</h6>
                          </div>
                        <div class="col-lg-12 text-start ms-1  ">
                          <label for="disabledTextInput" class="form-label">Bukti Pembayaran </label>
                          <button type="button" class="form-control text-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">
                          Lihat Gambar  {{-- <a href=" {{asset('gambar/'. $item->bukti ) }}" target="_blank" rel="noopener noreferrer" > Lihat </a>backend nama bukti pembayaran --}}
                          </button>
                          <div id="disabledTextInput" class="form-text text-center">Klik untuk melihat</div>
                          
                        </div>
                        </div>
                        <form action="/stskeuangan" method="post">
                        <div class="border rounded-3 col-12 p-3">
                        <div class=" co-sm-11 mx-auto">
                        <select class="form-select" aria-label="Default select example" name="statuskeuangan">
                          <option selected>Keputusan</option>
                          <option value="Belum Lunas">Belum Lunas</option>
                          <option value="Lunas">Lunas</option>
                          <option value="Ditolak">Ditolak</option>
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
                          <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Bukti Pembayaran</h1>
                                </div>
                                <div class="modal-body">
                                  <div class="justify-content-centered">
                                    @if ($item->image)
                                    <img src="{{asset('storage/'. $item->image ) }}" height="100%" width="300%" alt="" class="img-fluid justify-content-centered">
                                    @endif
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-secondary px-4 py-1" data-bs-dismiss="modal">Tutup</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                          </div>
                          {{-- akhir backend --}}
                          @endforeach
                        </tbody>
              </table>
            </div>  
          </div>
          </div>




{{-- footer --}}

<div class="footer col-12 mt-4  ">
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>