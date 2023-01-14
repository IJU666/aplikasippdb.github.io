<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <a href="{{ url('edit-isidata', $siswa->id) }}"  style="text-decoration: none;"><button class="nav-link col-auto active" >Biodata siswa</button></a>
      <a href="#"  style="text-decoration: none;"><button class="nav-link col-auto" >Minat Jurusan</button></a>
      <a href="#"  style="text-decoration: none;"><button class="nav-link col-auto" >Asal Sekolah</button></a>
      <a href="#"  style="text-decoration: none;"><button class="nav-link col-auto" >Orang Tua/Wali</button></a>
      <a href="#"  style="text-decoration: none;"><button class="nav-link col-auto" >Dokumen Persyaratan</button></a>
      <a href="#"  style="text-decoration: none;"><button class="nav-link col-auto" >Biaya Pendidikan</button></a>
    </div>
  </nav>
  <div class=" tab-content col-lg-12" id="nav-tabContent">

    {{-- Biodata Siswa --}}
    <div class="tab-pane fade ms-4 col-12 show active" id="nav-biodata" role="tabpanel" aria-labelledby="nav-biodata-tab">        
      <form action="{{ url('update-isidata', $siswa->id) }}" method="post">
        @csrf
            <div class="my-4 border-bottom">
                <div class="mb-3 row">
                    <label for="nisn" class="col-lg-3 col-md-6 col-form-label">NISN</label>
                    <div class="col-lg-6 col-md-10">
                      <input type="number" name="nisn" required value="{{ $siswa->nisn }}" autofocus  id="nisn" placeholder="Masukan NISN" class="form-control col-lg-9" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="nama" class="col-lg-3 col-md-5 col-form-label">Nama Lengkap</label>
                    <div class="col-lg-6 col-md-10 text-center">
                      <input type="text" class="form-control" id="nama" name="nama" required value="{{ $siswa->nama }}"   placeholder="Masukan Nama Lengkap">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="lahir" class="col-lg-3 col-md-4 col-form-label">Tempat Lahir</label>
                    <div class="col-lg-5 col-md-9 ">
                      <input type="text" class="form-control" id="lahir" name="tempat_lahir" required value="{{ $siswa->tempat_lahir }}"   placeholder="Masukan Tempat Lahir">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="tanggal" class="col-lg-3 col-md-6 col-form-label">Tanggal Lahir</label>
                    <div class="col-lg-3 col-md-7">
                      <input type="date" class="form-control" id="tanggal" name="ttg" required value="{{ $siswa->ttg }}"   placeholder="">
                    </div>
                  </div>
                  <div class="mb-3 row ">
                    <label for="jk" class="col-lg-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-auto form-check mt-1 mx-3">
                      <input class="form-check-input" type="radio" name="jk" required value="Laki-Laki" id="flexRadioDefault1" >
                      <label class="form-check-label" for="flexRadioDefault1">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="col-auto form-check mt-1">
                      <input class="form-check-input" type="radio" name="jk" required value="Perempuan" id="flexRadioDefault2" >
                      <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                      </label>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="agama" class="col-lg-3 col-form-label">Agama</label>
                    <div class="col-lg-3">
                      <input type="text" class="form-control" id="agama" name="agama" required value="{{ $siswa->agama }}"   placeholder="Masukan Agama">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="hp" class="col-lg-3 col-form-label">Nomor Ponsel</label>
                    <div class="col-lg-4">
                      <div class="input-group">
                        <input type="number" class="form-control" id="hp" name="hp" required value="{{ $siswa->hp }}" pattern="+62 - [0-9]{3} - [0-9]{4} - [0-9]{3}" value="+62"  aria-label="Username" aria-describedby="basic-addon1" placeholder="Contoh (+62 - 898 - 2323 - 3231)">
                      {{-- <input type="number" class="form-control" id="hp" name="hp" required value="{{ old('hp') }}" pattern="+62 - [0-9]{3} - [0-9]{4} - [0-9]{3}" value="+62" placeholder="+62 Nomor (Whastapp)"> --}}
                    </div>
                  </div>  
                  </div>
                  <div class="mb-3 row">
                    <label for="alamat" class="col-lg-3 col-form-label">Alamat </label>
                    <div class="col-sm-5">
                      <input type="text" name="alamat" id="alamat" required value="{{ $siswa->alamat }}" placeholder="Masukan Alamat" class="form-control">
                    
                    <div class=" col-sm-12 d-flex ">
                      {{-- daerah --}}
                      <div class="col-sm-5 mx-1">
                      <div id="emailHelp" class="form-text">Provinsi</div>
                      <select class="form-select" aria-label="Default select example" required id="provinsi">
                        <option selected value="{{ $siswa->provinsi }}" >{{ $siswa->provinsi }}</option>
                        @foreach ($provinces as $provinsi)
                            <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                        @endforeach
                       </select>
                      </div>
                      <div class="col-sm-5 mx-1">
                        <div id="emailHelp" class="form-text">Kota/Kabupaten</div>
                        <select class="form-select" aria-label="Default select example" required id="kabupaten">
                          <option selected value="{{ $siswa->kota }}" >{{ $siswa->kota }}</option>
                       
                        </select>
                        </div>
                        <div class="col-sm-5 mx-1">
                          <div id="emailHelp" class="form-text">Kecamatan</div>
                          <select class="form-select" aria-label="Default select example" required id="kecamatan">
                            <option selected value="{{ $siswa->kecamatan }}" >{{ $siswa->kecamatan }}</option>
                            
                          </select>
                          </div>
                          <div class="col-sm-5 mx-1">
                            <div id="emailHelp" class="form-text">Desa</div>
                            <select class="form-select" aria-label="Default select example" required id="desa">
                              <option selected value="{{ $siswa->desa }}" >{{ $siswa->desa }}</option>
                             
                            </select>
                        </div>
                    </div>
                    {{-- akhir daerah --}}
                  </div>
                  </div>


            </div>

            <label for="disabilitas">Apakah siswa memiliki berkebutuhan khusus?</label>
            <div class="d-flex my-3 col-12 mx-auto">
            <div class="form-check mx-1">
              <input class="form-check-input tmbl-ya" type="radio" name="status" id="exampleRadios1" value="Ya" >
              <label class="form-check-label" for="exampleRadios1">
                Ya
              </label>
            </div>
            <div class="form-check mx-4">
              <input class="form-check-input tmbl-ya" type="radio" name="status" id="exampleRadios2" value="Tidak">
              <label class="form-check-label" for="exampleRadios2">
                Tidak
              </label>
            </div>
          </div>
          <div class="col-sm-4" id="tombol-ya" >
            <div id="disabilitas" class="form-text">Silahkan tuliskan di bawah ini</div>
            <input type="text" class="form-control" name="keterangan" value="-"  id="disabilitas" aria-describedby="emailHelp" placeholder="Sebutkan">
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 mb-5 ms-5 ">
            <button type="submit" class="btn buttonoutline float-end px-4 py-1">Lanjut</button>
      {{-- <h5 class="btn buttonoutline px-4 py-1 mt-3" data-bs-toggle="tab" data-bs-target="#nav-minjur">Lanjut</h5> --}}

          </div>
        </form>
    </div>

    {{-- akhir biodata siswa --}}



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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    $("#tombol-ya").css("display", "none");
    $(".tmbl-ya").click(function () {
        if ($("input[name='status']:checked").val() == "Ya") {
            $("#tombol-ya").slideDown("fast");
        } else {
            $("#tombol-ya").slideUp("fast");
        }
    });
});
</script>


<script>
  $(function () {
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $(function() {
  $('#provinsi').on('change',function(){
    let id_provinsi = $('#provinsi').val();

    $.ajax({
      type : 'POST',
      url : "{{ route('getkabupaten') }}",
      data : {id_provinsi:id_provinsi},
      cache : false,

      success:function(msg){
        $('#kabupaten').html(msg);
      },
      error: function(data){
        console.log('error:',data)
      },
    })
  })

  $('#kabupaten').on('change',function(){
    let id_kabupaten = $('#kabupaten').val();

    $.ajax({
      type : 'POST',
      url : "{{ route('getkecamatan') }}",
      data : {id_kabupaten:id_kabupaten},
      cache : false,

      success:function(msg){
        $('#kecamatan').html(msg);
      },
      error: function(data){
        console.log('error:',data)
      },
    })
  })

  $('#kecamatan').on('change',function(){
    let id_kecamatan = $('#kecamatan').val();

    $.ajax({
      type : 'POST',
      url : "{{ route('getdesa') }}",
      data : {id_kecamatan:id_kecamatan},
      cache : false,

      success:function(msg){
        $('#desa').html(msg);
      },
      error: function(data){
        console.log('error:',data)
      },
    })
  })

})
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>

