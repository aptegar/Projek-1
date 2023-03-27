<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/home.css">
  <title>Home</title>
</head>

<body>
  <!-- navbar -->
  <div class="container-fluid shadow-sm bg-body rounded">
    <div class="container">
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="asset/img/DolFILE3.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            DolFile
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="toko.php" style="border: 1px solid;">Rp.0.00 <i class="bi bi-basket"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <!-- banner -->
  <div class="jumbotron jumbotron-fluid">
    <div class="card banner mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img style="width:30em;" src="asset/img/DolFILE3.png" class="img-fluid rounded-start" alt="dolfile.">
        </div>
        <div class="col-md-8">
          <div class="banner">
            <h5 class="card-title" style="font-size: 50px;">Tingkatkan Kinerja Bisnismu Hingga 86% Lebih Cepat</h5>
            <a href="#about"><button type="button" class="btn btn-warning" style="color: white;">Selengkapnya</button></small></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- icon -->
  <div class="container icon">
    <div class="row row-icon">
      <div class="col"></div>
      <div class="col">
        <img class="icon1" src="asset/icon/icon1.png" alt="">
      </div>
      <div class="col">
        <img class="icon1" src="asset/icon/icon2.png" alt="">
      </div>
      <div class="col">
        <img class="icon1" src="asset/icon/icon3.png" alt="">
      </div>
      <div class="col">
        <img class="icon1" src="asset/icon/icon4.png" alt="">
      </div>
      <div class="col"></div>
    </div>
  </div>

  <!-- content 2 -->
  <div class="container container2">
    <h2 class="text-center pb-3">Best Selling Products</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <a href="produk/produk1.php">
            <img src="asset/img/1.png" class="card-img-top" alt="drive">
          </a>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <a href="produk/produk2.php">
            <img src="asset/img/2.png" class="card-img-top" alt="drive">
          </a>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <a href="produk/produk3.php">
            <img src="asset/img/3.png" class="card-img-top" alt="drive">
          </a>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- content3 -->
  <div class="card" style="border: none ;">
    <div class="card-body" style="border-radius:20px; background-color: rgb(33, 107, 255); width:600px; margin: 0 auto; height: 80px; padding: 20px;">
      <p align="center" class="text-white">Mencari Produk yang lain? Klik lihat toko! <span><a href="toko.html"><button type="button" class="btn btn-warning" style="color: white; padding: 5px; margin: 0px;">Lihat Toko</button></a></span></p>

    </div>
  </div>

  <!--about-->
  <div class="jumbotron" id="about">
    <div class="container px-lg-5">
      <div class="row mx-lg-n5">
        <div class="col py-3 px-lg-5"><img src="asset/img/DolFILE3.png" alt="" style="height: 20em; margin-top: 60px; margin-bottom: 60px; margin-left: 100px;"></div>
        <div class="col py-3 px-lg-5">
          <h5 style="margin-top: 50px ; padding-left: 20px;">About DolFile</h5><br>
          <p style="margin:0 0;">
            DolFIle Adalah Penyedia Layanan dan Jasa Digital Marketing yang menyediakan semua kebutuhan Digital Marketing,
            Termasuk Jasa, Edukasi, Tools, dan Asset Digital yang bisa digunakan ulang untuk kebutuhan promosi.</p><br>
          <p> Sebagai penyedia layanan dan produk, kami mempunyai visi untuk membantu mengembangkan dan memudahkan Pemilik Bisnis dan Pekerja Digital Marketing dengan Produk dan Layanan kami.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- pesan -->
  <div class="container pt-5" style="margin-top: 5em;">
    <h2 class="text-center pb-3" id="contact">Pesan</h2>
    <div class="row" style=" margin:0 100px;">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Email">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Pesan"></textarea>
      </div>
      <div class="mb-3">
        <button type="button" class="btn btn-warning" style="color: white;">Kirim</button></small>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer style="background-color:black ; margin-top: 50px;">
    <div class="container text-left">
      <div class="row" style="margin: 0 100px ;">
        <div class="col pt-3">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" style="border: none ;"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="#" class="list-group-item list-group-item-action" style="border: none ;"><i class="bi bi-instagram"></i> Instagram</a>
            <a href="#" class="list-group-item list-group-item-action" style="border: none ;"><i class="bi bi-whatsapp"></i> Whatsapp</a>
            <p class="text-end text-white">&copy;Writer by : Tegar Ap</p>
          </div>
        </div>
      </div>
  </footer>

</body>

</html>