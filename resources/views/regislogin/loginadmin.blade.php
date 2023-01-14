<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB BAKTI NUSANTARA 666</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logonibg.png" type="image/x-icon">
    <link rel="stylesheet" href="css/projek.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>

  <body>
        <div>
       <div class="col-sm-12 my-3 pb-1 pt-4 " style="opacity: 99%;">
        <div class="bg-white rounded-4 col-sm-10 mx-auto shadow-lg ">
            <div class="pb-5">
              <div class="col-sm-11  mx-auto p-2 rounded-3" >
                <div style="opacity: 99%;"><a href="/" style="text-decoration: none;"><i class="fa-solid fa-arrow-left-long"></i> kembali </a></div>
              <div class="d-flex">

                <div class="col-sm-6 ">
                  <div class="mt-3">
                    <h4 class="text-center fw-semibold">PSB BN</h4>
                    <p class="text-center text-secondary">Penerimaan Siswa Baru Bakti Nusantara 666 </p>
                    <div class="mx-auto col-sm-8">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                      {{-- <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div> --}}
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="1800">
                          <img src="img/icon3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="1800">
                          <img src="img/icon2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="1800">
                          <img src="img/icon1.png" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    </div>
                
              </div>
                </div>
               <div class="col-sm-5 mx-auto">
                <div class="col-md-12">
                  @if (session()->has('loginerror'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginerror') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>                
                  @endif
                </div>
                <div class="bg bg-white shadow rounded-3  ">
                  <form action="/admin" method="post">
                    @csrf
                  <div style="margin-bottom: -15%;">
                  <svg class="rounded-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ecebeb" fill-opacity="0.6" d="M0,192L40,176C80,160,160,128,240,117.3C320,107,400,117,480,154.7C560,192,640,256,720,245.3C800,235,880,149,960,106.7C1040,64,1120,64,1200,58.7C1280,53,1360,43,1400,37.3L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
                </div>
                <div><h6 class="text-center fw-semibold fs-2">Masuk</h6></div>
                
                 {{-- username --}}
                <div class="d-flex col-sm-10  mt-4 mx-auto border-bottom" style="opacity: 99%;">
                  <div class="my-auto border-end">
                <label for="username" class=" col-sm-1 px-2"><i class="fa-solid fa-envelope text-secondary fs-3" ></i></label>
              </div>
              <div class=" col-sm-10 ms-2">
                <input type="username" name="username" required value="{{ old('username') }}" autofocus class="form-control-plaintext @error('username') is-invalid @enderror" placeholder="Masukan username" style="border: none;">  
                @error('username')
                <div class="d-flex invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
                </div> 

                {{-- kata sandi --}}
                <div class="d-flex col-sm-10 mt-3 mx-auto border-bottom" style="opacity: 99%;">
                  <div class="my-auto border-end">
                <label for="pass" class=" col-sm-1 px-2"><i class="fa-solid fa-lock text-secondary fs-3" style="margin-left: 3px;"></i></label>
              </div>
              <div class=" col-sm-10 ms-2">
                <input type="password" name="password" id="pass" required class="form-control-plaintext" placeholder="Masukan Kata Sandi" style="border: none;">  
              </div>
                </div>
                <div class="d-flex mt-4 col-sm-10 mx-auto">
                <div class="form-check col-sm-6" style="opacity: 99%;">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label text-secondary" for="exampleCheck1">Ingat Saya</label>
                </div>
                {{-- <div class="col-sm-6" style="opacity: 99%;">
                  <a href="" style="text-decoration: none;" class="float-end">Lupa Password?</a>
                </div> --}}
              </div>
                <div class="col-sm-8 mt-2 mx-auto" style=" opacity: 99%;">
                  <button class="buttonoutline btn mt-2 form-control" type="submit">Masuk</button>
                </div>
               
                
                  <svg style="margin-top: -11%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ecebeb" fill-opacity="0.6" d="M0,64L40,80C80,96,160,128,240,138.7C320,149,400,139,480,154.7C560,171,640,213,720,240C800,267,880,277,960,272C1040,267,1120,245,1200,229.3C1280,213,1360,203,1400,197.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
                </form>
                </div>
              </div>

              </div>
            </div>
            </div>
            <div class="col-sm-3 mx-auto">
              <small style="opacity: 99%; color: #afafaf;"><i class="fa fa-copyright me-1" aria-hidden="true"></i>Copyright | SMK Bakti Nusantara 666</small>
            </div>

            <div style="margin-top: -61%;">
              <svg viewBox="0 0 800 500" class="rounded-3" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                <g transform="translate(-280, 200)">
                  <path class="blob" d="M343,342.5Q250,435,185.5,342.5Q121,250,185.5,147Q250,44,343,147Q436,250,343,342.5Z" fill="#2070ad "></path>
                </g>
              </svg>
              {{-- <svg width="100%"  height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient" x1="36%" y1="98%" x2="64%" y2="2%"><stop offset="5%" stop-color="#002bdc"></stop><stop offset="95%" stop-color="#32ded4"></stop></linearGradient></defs><path d="M 0,500 C 0,500 0,166 0,166 C 51.73713158219263,170.18867924528303 103.47426316438526,174.37735849056602 153,189 C 202.52573683561474,203.62264150943398 249.8400789246516,228.6792452830189 308,218 C 366.1599210753484,207.3207547169811 435.16542113700825,160.9056603773585 495,130 C 554.8345788629917,99.09433962264151 605.4982365273153,83.69811320754718 662,109 C 718.5017634726847,134.30188679245282 780.8416327537306,200.30188679245285 823,220 C 865.1583672462694,239.69811320754715 887.1352324577629,213.0943396226415 932,198 C 976.8647675422371,182.9056603773585 1044.6174374152176,179.32075471698116 1100,171 C 1155.3825625847824,162.67924528301884 1198.3950178813664,149.62264150943395 1253,148 C 1307.6049821186336,146.37735849056605 1373.8024910593167,156.18867924528303 1440,166 C 1440,166 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><defs><linearGradient id="gradient" x1="36%" y1="98%" x2="64%" y2="2%"><stop offset="5%" stop-color="#002bdc"></stop><stop offset="95%" stop-color="#32ded4"></stop></linearGradient></defs><path d="M 0,500 C 0,500 0,333 0,333 C 67.12413367862868,318.7302256751757 134.24826735725736,304.46045135035143 188,318 C 241.75173264274264,331.53954864964857 282.13106424959926,372.8884202737699 323,371 C 363.86893575040074,369.1115797262301 405.2274756443459,323.985867554569 459,313 C 512.7725243556541,302.014132445431 578.9590331730176,325.1681095079541 638,317 C 697.0409668269824,308.8318904920459 748.9363916635837,269.3416944136145 793,283 C 837.0636083364163,296.6583055863855 873.2954001726476,363.4651128375879 931,382 C 988.7045998273524,400.5348871624121 1067.8820076458255,370.797854236034 1134,344 C 1200.1179923541745,317.202145763966 1253.17656924405,293.343470218276 1302,292 C 1350.82343075595,290.656529781724 1395.411715377975,311.828264890862 1440,333 C 1440,333 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path></svg> --}}
            </div>
            
        </div>  
        
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>