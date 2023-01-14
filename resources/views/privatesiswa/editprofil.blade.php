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
            <div class="d-block " style="margin-right: 58%;">
            <h3 class="fw-bold fst-italic">SMK BAKTI NUSANTARA 666</h3>
            <h5 class="fw-bolder fst-italic text-warning">Humanis, Edukatif, Karakteristik</h5>
            </div>
            <div class=" dropdown ">
                <button type="button" class="btn dropdown-toggle show  border-light" data-bs-toggle="dropdown" aria-expanded="false">
                  <span><img src="img/default.png" alt="" width="40"></span>
                </button>
                <div class=" position-absolute mt-2">
                <ul class="dropdown-menu translate-middle-x mx-auto mt-2 me-5">
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
          </nav>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-4">
          @if (session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>                
          @endif
        </div>
      </div>
  
    <div class=" mx-auto rounded 3 col-lg-7 p-5 mt-5 " style="background-color:#e7e7e7;">
        <div class="row">

        <div class="col-lg-6 mt-4 border-end border-dark  " >
            <h4 class="fw-semibold text-center me-5 ">Ubah Profil</h4>
            <div class="mx-5  mt-4">
                <img src="img/default.png" alt="" width="200" class=" mx-4 my-3 py-auto  ">
                <a class=" text-dark " style="text-decoration: none;">@auth{{ auth()->user()->email }}@endauth</a>
            </div>
            
    </div>
    <div class="col-lg-6 mt-4   ">
        <h4 class="fw-semibold text-center ms-3 "  >Ubah Kata Sandi</h4>
        <div >
            <form action="/editprofil" method="post" class="mt-5">
              @csrf
                <div class=" mb-3 {{ $errors->has('current_password') ? ' has-error' : '' }}" style="padding-left: 10%;">
                    <label for="current_password">Kata Sandi Saat Ini</label>
                    <input type="password" class="form-control  " name="current_password" id="current_password" placeholder="Masukan Kata Sandi Saat Ini">
                    @error('current_password')
                        <div class="d-flex invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class=" mb-3 {{ $errors->has('password') ? ' has-error' : '' }}" style="padding-left: 10%;">
                    <label for="password">Kata Sandi Yang Baru</label>
                    <input type="password" class="form-control  " name="password" id="password" placeholder="Masukan Kata Sandi Yang Baru">
                    @error('password')
                    <div class="d-flex invalid-feedback">
                    {{ $message }}
                    </div>
                   @enderror
                  </div>

                  <div class=" mb-3" style="padding-left: 10%;">
                    <label for="password_confirmation">Ulang Kata Sandi Yang Baru</label>
                    <input type="password" class="form-control  " name="password_confirmation" id="password_confirmation" placeholder="Masukan Ulang Kata Sandi Yang Baru">
                    @error('password_confirmation')
                    <div class="d-flex invalid-feedback">
                    {{ $message }}
                    </div>
                   @enderror
                  </div>
                  <button type="submit" class="btn button1 py-1 px-4 rounded-3  mb-3 mt-1  float-end "   ><a class="nav-link" href="">Simpan</a></button>
            </form>
            
        </div>

    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>

</html>