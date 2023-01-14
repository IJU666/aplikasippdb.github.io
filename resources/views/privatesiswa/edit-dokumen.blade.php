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
          <a class="nav-link active navnaw lebar text-light col-lg-3"aria-current="page" href="/Privatecs">Pendaftaran</a>
          <a class="nav-link navnaw2 text-light col-lg-4"  href="/pembayaran">Pembayaran</a>
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
<div class="col-lg-11 col-md-12 col-sm-12 rounded-4 p-3 mx-auto mt-3 " style="background-color: #f0f0f0;">
  <div style="margin-bottom: -20%;">
    <svg class="rounded-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0e0e0" fill-opacity="1" d="M0,160L21.8,144C43.6,128,87,96,131,74.7C174.5,53,218,43,262,74.7C305.5,107,349,181,393,197.3C436.4,213,480,171,524,138.7C567.3,107,611,85,655,117.3C698.2,149,742,235,785,261.3C829.1,288,873,256,916,234.7C960,213,1004,203,1047,213.3C1090.9,224,1135,256,1178,261.3C1221.8,267,1265,245,1309,224C1352.7,203,1396,181,1418,170.7L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
</div>  
<div class="col-11 rounded-4 py-5 px-3 mx-auto mt-3 border border-light" style="opacity: 99%; backdrop-filter:blur(12px)" >
  <div class="col-lg-12 mx-auto p-4 shadow rounded-4" style="background-color: #f6f6f6">
<div class="col-11 pt-3" >
    <nav>
        <div class="nav nav-tabs col-lg-12"  id="nav-tab" role="tablist">
          <a href="{{ url('edit-isidata', $biodata->id) }}"  style="text-decoration: none;"><button class="nav-link col-auto" >Biodata Siswa</button></a>
          <a href="{{ url('edit-jurusan', $minat->id) }}"  style="text-decoration: none;"><button class="nav-link col-auto " >Minat Jurusan</button></a>
          <a href="{{ url('edit-asalsekolah', $asalsekolah->id) }}"  style="text-decoration: none;"><button class="nav-link col-auto" >Asal Sekolah</button></a>
          <a href="{{ url('edit-ortu', $ortu->id) }}"  style="text-decoration: none;"><button class="nav-link col-auto" >Orang Tua/Wali</button></a>
          <a href="#"  style="text-decoration: none;"><button class="nav-link col-auto active" >Dokumen Persyaratan</button></a>
          <a href="#"  style="text-decoration: none;"><button class="nav-link col-auto" >Biaya Pendidikan</button></a>
        </div>
      </nav>
   <div class=" tab-content col-lg-12" id="nav-tabContent">


 
{{-- dokumen persyaratan --}}
<div class="tab-pane active show fade ms-4" id="nav-persyaratan" role="tabpanel" aria-labelledby="nav-persyaratan-tab">    
    <div class="mt-3">
      <form action="{{ url('update-dokumen', $dokumen->id) }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="mb-3 col-sm-6">
        <label for="gambar1" class="form-label">Ijazah SMP</label>
        <input type="hidden" name="oldImage" value="{{ $dokumen->gambar1 }}">
        <input class="form-control" type="file"  name="gambar1" value="" id="gambar1" onchange="previewImage()" >
        @error('gambar1')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
        @enderror
        <img class="img-preview img-fluid" src="{{ asset('storage/'. $dokumen->gambar1) }}" height="10%" width="50%" alt="" srcset="">
      </div>
      <div class="mb-3 col-sm-6">
        <label for="gambar2" class="form-label">Akta Kelahiran</label>
        <input type="hidden" name="oldImage1" value="{{ $dokumen->gambar2 }}">
        <input class="form-control" name="gambar2" type="file" id="gambar2" onchange="previewImage1()">
        @error('gambar2')
        <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
        <img class="img-preview1 img-fluid" src="{{ asset('storage/'. $dokumen->gambar2) }}" height="10%" width="50%" alt="" srcset="">
      </div>

      <div class="mb-3 col-sm-6">
        <label for="gambar3" class="form-label">Pas Foto</label>
        <input type="hidden" name="oldImage2" value="{{ $dokumen->gambar3 }}">
        <input class="form-control" name="gambar3" type="file" id="gambar3" onchange="previewImage2()">
        @error('gambar3')
        <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          <img class="img-preview2 img-fluid" src="{{ asset('storage/'. $dokumen->gambar3) }}" height="10%" width="50%" alt="" srcset="">
      </div>

      <div class="mb-3 col-sm-6">
        <label for="gambar4" class="form-label">Kartu Keluarga</label>
        <input type="hidden" name="oldImage3" value="{{ $dokumen->gambar4 }}">
        <input class="form-control" name="gambar4" type="file" id="gambar4" onchange="previewImage3()">
        @error('gambar4')
          <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
          <img class="img-preview3 img-fluid" src="{{ asset('storage/'. $dokumen->gambar4) }}" height="10%" width="50%" alt="" srcset="">
    </div>
    
      <div class="col-sm-12 col-md-12 col-lg-12 mb-5 ms-5">
        <button type="submit" class="btn buttonoutline float-end px-4 py-1">Lanjut</button>
      </div>
    </form>
    </div>
  </div>
  {{-- akhir dokumen persyaratan --}}
  
    
</div>
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

  <script>

    function previewImage(){
      const image = document.querySelector('#gambar1');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
    
    function previewImage1(){
      const image = document.querySelector('#gambar2');
      const imgPreview = document.querySelector('.img-preview1');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
    
    function previewImage2(){
      const image = document.querySelector('#gambar3');
      const imgPreview = document.querySelector('.img-preview2');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    } 

    function previewImage3(){
      const image = document.querySelector('#gambar4');
      const imgPreview = document.querySelector('.img-preview3');

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