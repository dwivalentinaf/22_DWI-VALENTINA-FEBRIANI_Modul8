<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> My Landing Page </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="editfile.css">

  </head>
  <body>
    <!-- header -->
    <nav class="navbar fixed-top">
        <div class="container-fluid">
          <div>
            <span class="navbar-brand mb-0 h1"> DAFTAR MAHASISWA </span>
            <a class="navbar-brand" href="#"> Selamat datang di WEB, Dwi Valentina Febriani </a>
          </div>
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>

            <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              Animals
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body position-relative">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Daftar </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> About </a>
              </li>
            </ul>
            <div class="tombol position-absolute bottom-0 start-50">
              <a class="btn btn-primary d-grid gap-2" href="#" role="button"
                >Logout</a
              >
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end header -->

    <!-- content -->
    <section class="mt-5">
      <div class="content position-relative" style="padding-top: 50px">
        <div class="row">
          <h2 class="text-center">
            DAFTAR MAHASISWA
          </h2>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col-4">
            <div class="card mx-auto" style="width: 85%">
              <img src="avatar.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"> DWI VALENTINA FEBRIANI </h5>
                <p class="card-text">
                    Nama panjang Dwi Valentina Febriani, asal Lamongan, Prodi Sistem Informasi
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mx-auto" style="width: 85%">
              <img src="avatar.jpg" class="card-img-top" alt="..."" />
              <div class="card-body">
                <h5 class="card-title"> YUYUN OKTALINA A </h5>
                <p class="card-text">
                    Nama Panjang Yuyun Oktalina Arlita, asal Sidoarjo, Prodi Sistem Informasi
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mx-auto" style="width: 85%">
              <img src="avatar.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"> LOIS INDY PAHLEVI </h5>
                <p class="card-text">
                 Nama Panjang Lois Indy Pahlevi S , asal Sidoarjo, Prodi Sistem Informasi
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end content -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>