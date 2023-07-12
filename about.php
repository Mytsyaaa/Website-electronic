<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic WoW Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="logo"><span id="span1">Electronic </span>WoW <span>Store </span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86);">
                  <li><a class="dropdown-item" href="index.php">Televisi</a></li>
                  <li><a class="dropdown-item" href="index.php">Mesin Cuci</a></li>
                  <li><a class="dropdown-item" href="index.php">Kipas Angin</a></li>
                  <li><a class="dropdown-item" href="index.php">AC</a></li>
                  <li><a class="dropdown-item" href="index.php">Sound</a></li>
                  <li><a class="dropdown-item" href="index.php">Kulkas</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar -->
  
    <div class="container" id="about">
        <h3>PRODUCT</h3>
        <hr><p>Selamat datang di toko kami! Kami adalah destinasi utama untuk semua kebutuhan elektronik anda. dengan koleksi produk terlengkap dan harga kompetitif, kami menawarkan pengalaman belanja yang nyaman dan memuaskan bagi pelanggan kami.</p>
        <hr>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card">
                    <img src="./images/background.png" alt="">
                </div>
            </div>
            <div class="col-md-7 py-3 py-md-0">
                <p>Kami berkomitmen untuk memberikan layanan pelanggan yang luar biasa. tim dukungan pelanggan kami siap membantu anda dengan pertanyaan, saran, dan bantuan teknis yang mungkin anda butuhkan. Selamat berbelanja di toko elektronik kami, dan jangan ragu untuk menghubungi kami jika ada yang kami bantu!</p>
                <button>Selengkapnya</button>
            </div>
        </div>
    </div>

    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3>Free Ongkir</h3>
          <p>Min Belanja Rp 50.000.000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Return Barang</h3>
          <p>Garansi 1 Tahun</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Pengiriman Cepat</h3>
          <p>Area Jawa, Bali, dan Sumatra</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Banyak Diskon</h3>
          <p>Pada Setiap Pembelian</p>
        </div>
      </div>
    </div>
    <!-- offer -->
    
    <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Electronic WoW Store</h3>
      <div class="input text-center">
        <input type="text" placeholder="Alamat Email">
        <button id="subscribe">MESSAGE</button>
      </div>
    </div>
    <!-- newslater -->

    <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Electronic WoW Store</h3>
              <p>
                Jawa <br />
                Bali <br />
                Sumatra <br />
              </p>
              <strong>Phone:</strong> +6289644149739 <br />
              <strong>Email:</strong> electronicwowstore@gmail.com <br />
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li><a href="#">PS 5</a></li>
              <li><a href="#">Computer</a></li>
              <li><a href="#">Gaming Laptop</a></li>
              <li><a href="#">Mobile Phone</a></li>
              <li><a href="#">Gaming Gadget</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Media Sosial</h4>
              <p>Dapatkan Info Lengkapnya di Akun Official Kami</p>

              <div class="socail-links mt-3">
                <a href="contact.php"><i class="fa-brands fa-twitter"></i></a>
                <a href="contact.php"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="contact.php"><i class="fa-brands fa-instagram"></i></a>
                <a href="contact.php"><i class="fa-brands fa-skype"></i></a>
                <a href="contact.php"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            
            </div>

          </div>
        </div>
      </div>
      <hr>
      <div class="container py-4">
        <div class="NATASYA PUTRI">
          &copy; NATASYA PUTRI <strong><span>211250000401</span></strong
          >
        </div>
        <div class="credits">SISTEM INFORMASI <a>"PEMROGRAMAN WEB"</a></div>
      </div>
    </footer>
    <!-- footer -->
    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>