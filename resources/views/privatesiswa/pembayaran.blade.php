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
        <a class="nav-link active navnaw lebar text-light col-lg-4"  href="/pembayaran">Pembayaran</a>
        <a class="nav-link navnaw2 text-light col-lg-2" href="/jadwal">Jadwal</a>
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
  
  

   
   

      
          <!-- Page content-->              
            <div class="col-sm-10  rounded-4 p-3 mx-auto mt-3 " style="background-color: #f0f0f0;">
              <div style="margin-bottom: -15%;">
                <svg class="rounded-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="1" d="M0,96L26.7,90.7C53.3,85,107,75,160,58.7C213.3,43,267,21,320,26.7C373.3,32,427,64,480,96C533.3,128,587,160,640,176C693.3,192,747,192,800,165.3C853.3,139,907,85,960,69.3C1013.3,53,1067,75,1120,112C1173.3,149,1227,203,1280,234.7C1333.3,267,1387,277,1413,282.7L1440,288L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
            </div>  
            <div class="col-sm-10 rounded-4 py-5 px-3 mx-auto mt-3 border border-light" style="opacity: 99%; backdrop-filter:blur(12px)" >
              <div class="col-sm-11 mx-auto p-4 shadow rounded-4" style="background-color: #f6f6f6">
                <div class="col-sm-4" style="margin-top: -5%;">
                  <h6 class="text-light text-center py-2 rounded-3" style="background-color: #0099cc;">PEMBAYARAN</h6>
                </div>
                <div class=" col-sm- 12">
                <div class="float-end">
              </div>
              
              <div >
                <form action="/pembayaran" method="post" class="input-group " enctype="multipart/form-data">
                  @csrf
            
                <div class="input-group mb-4 mt-4"style="padding-right:50%;">
                    <span class="input-group-text">Tanggal Pembayaran</span>
                    <input type="date" name="ttgpembayaran" aria-label="tglpembayaran" required class=" form-control " >
                </div>
                <div class="input-group mb-4 " style="padding-right:50%;">
                    <span class="input-group-text " style="padding-right: 11%;">Jam Pembayaran</span>
                    <input type="time" name="jampembayaran" aria-label="jampembayaran" required class=" form-control " >
                </div>
                <div class="input-group mb-5 " style="padding-right:19%;">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()">
                    <label class="input-group-text " for="image">Unggah Bukti Pembayaran</label>
                    @error('image')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                    <img class="img-preview img-fluid">
                </div>
                <button type="submit" class="btn buttonoutline py-1 px-4 rounded-3  mb-2 me-4 float-end ">Kirim</button>
                </form>
                
            </div>
            
              </div>
            </div>
            </div>
            <div style="margin-top: -15%;">
              <svg class="rounded-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="1" d="M0,192L26.7,160C53.3,128,107,64,160,42.7C213.3,21,267,43,320,64C373.3,85,427,107,480,101.3C533.3,96,587,64,640,48C693.3,32,747,32,800,74.7C853.3,117,907,203,960,234.7C1013.3,267,1067,245,1120,197.3C1173.3,149,1227,75,1280,42.7C1333.3,11,1387,21,1413,26.7L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
            </div>
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
<script src="js/scripts.js"></script>

<script>
  function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
</script>
</body>
</html>