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
            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user me-2"></i>Profil</a></li>
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


<div class="mx-auto my-5 rounded 3 col-7 p-5" style="background-color:#e7e7e7;">
    <img src="img/default.png" alt="" width="200" class=" mx-auto d-block">
    <div class="text-center mt-2">
            <a class=" text-dark" style="text-decoration: none;">@auth{{ auth()->user()->email }}@endauth</a>
            <br>
            <h6 class="btn button1 py-1 px-4 rounded-3  mt-4"><a class="nav-link" href="/editprofil">Ubah Profil</a></h6>
    </div>
</div>

  </body>
  </html>