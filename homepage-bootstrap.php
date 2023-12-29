<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="custom.css" />
  </head>
  <style>
    * {
      font-family: "Poppins", sans-serif;
      color: black;
    }
  </style>
  <body>
    <!-- awal container -->
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <i class="fa-solid fa-gears"></i>
        <a class="navbar-brand" href="#">E-Matlab.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Tentang</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Layanan </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">CATATAN PELANGGARAN</a>
                </li>
                <li><a class="dropdown-item" href="#">JURNAL KEAMANAN</a></li>
                <li><a class="dropdown-item" href="#">DATA KESEHATAN</a></li>
                <li><a class="dropdown-item" href="#">PEMBELAJARAN</a></li>
                <li><a class="dropdown-item" href="#">PERPUSWEB</a></li>
                <li><a class="dropdown-item" href="#">TABUNGAN</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something Else Here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak Kami</a>
            </li>

            <li class="nav-item">
              <button type="button" class="btn btn-primary btn-sm rounded-pill">Sign Up</button>
            </li>
          </ul>
        </div>
        <!-- akhir dari navbar -->
      </nav>
    </div>
    <!-- awal showcase -->
    <section class="text-white p-5 p-lg-5 text-center text-sm-start">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1 class="text-enter"><b>Enter The World of</b></h1>
            <h1 class="text-primary">E-Matlab</h1>
            <p class="text-secondary lead my-4">
              Sistem informasi yang dibangun untuk membantu dalam manajemen dan administrasi pondok pesantren Matlabus Salik. Sehingga pondok pesantren Matlabus Salik menjadi lebih profesional dan siap menuju Era Digital.
            </p>
            <button class="btn btn-warning">Explore The Website</button>
          </div>
          <img src="..//homepage/asset/background-learn.png" alt="owl-learn" class="img-fluid h-75 d-none d-sm-block" style="width: 700px" />
        </div>
      </div>
    </section>
    <!-- Akhir Showcase -->

    <!-- Awal Roadmap -->
    <!-- <section class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-primary text-light">
              <div class="card-body">
                <img src="..//homepage/asset/security.png" alt="" />
                <h3>JURNAL KEAMANAN</h3>
                <p>AL-MATLAB DIGITAL</p>
                <a href="#">SELENGKAPNYA</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Akhir Roadmap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
