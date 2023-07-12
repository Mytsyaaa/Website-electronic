<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electronic WoW Store</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet" />
    <!-- fonts links -->
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" id="logo"><span id="span1">Electronic </span>WoW <span>Store</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><img src="./images/menu.png" alt="" width="30px" /></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86)">
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

    <!-- home content -->
    <section class="home">
      <div class="content">
        <h1>
          <br />
          Potongan Harga <span id="span2">Mulai Dari</span> 25%
        </h1>
        <p>tersedia berbagai macam alat elektronik <br />mulai dari Televisi, Setrika, Kipas Angin, AC, DLL.</p>
        <div class="btn"><button>Shop Now</button></div>
      </div>
      <div class="img">
        <img src="./images/background.png" alt="" />
      </div>
    </section>
    <!-- home content -->

    <!-- product cards -->
    <div class="container" id="product-cards">
      <h1 class="text-center">PRODUCTS</h1>
      <div class="row" style="margin-top: 30px">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card ">
              <img href="tambah.php" src="https://cdn-icons-png.flaticon.com/128/6499/6499530.png" alt="" />
              <button><a href="tambah.php" type="button" class="btn mb-3 me-3"> Tambah Produk </a><button>
              </div>
          </div>
        </div>
  
        <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM produk") or die(mysqli_error($koneksi));
          while($hasil = mysqli_fetch_array($sql)){
          ?>
          <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img href="tambah.php" src="images/<?php echo $hasil['gambar']; ?>" width="100px" height="100px"/>
            <?php echo $hasil['nama_barang'],"<br>"; ?>
            <?php echo $hasil['harga_barang'],"<br>"; ?>
            <?php echo $hasil['keterangan'],"<br>"; ?>
          </div>
          </div>
        <?php } ?>
      </div>
      

      
    </div>
    <!-- product cards -->

    <!-- other cards -->
    <div class="container" id="other-cards">
      <div class="row">
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/c1.png" alt="" />
            <div class="card-img-overlay">
              <h3>Best Laptop</h3>
              <h5>Latest Collection</h5>
              <p>Up To 50% Off</p>
              <button id="shopnow">Shop Now</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/c2.png" alt="" />
            <div class="card-img-overlay">
              <h3>Best Headphone</h3>
              <h5>Latest Collection</h5>
              <p>Up To 50% Off</p>
              <button id="shopnow">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- other cards -->

    <!-- banner -->
    <section class="banner">
      <div class="content">
        <h1>
          <span>DAFTARKAN DIRI MENJADI MEMBER</span>
          <br />
          Up To <span id="span2">50%</span> Off
        </h1>
        <div class="btn"><button>Shop Now</button></div>
      </div>
      <div class="img">
        <img src="./images/image1.png" alt="" />
      </div>
    </section>
    <!-- banner -->

    <!-- product cards -->
    <div class="container" id="product-cards">
      <div class="row" style="margin-top: 30px">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr1.png" alt="" />
            <div class="card-body">
              <h3 class="text-center">Washion Machine</h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                Rp 12.999.000 <span><li class="fa-solid fa-cart-shopping"></li></span>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr2.png" alt="" />
            <div class="card-body">
              <h3 class="text-center">AC</h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                Rp 15.699.000 <span><li class="fa-solid fa-cart-shopping"></li></span>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr3.png" alt="" />
            <div class="card-body">
              <h3 class="text-center">Microwave Oven</h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                Rp 9.999.000 <span><li class="fa-solid fa-cart-shopping"></li></span>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr4.png" alt="" />
            <div class="card-body">
              <h3 class="text-center">Fridge</h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                Rp 18.999.000 <span><li class="fa-solid fa-cart-shopping"></li></span>
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 30px">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card ">
              <img href="tambah.php" src="https://cdn-icons-png.flaticon.com/128/6499/6499530.png" alt="" />
              <button><a href="tambah.php" type="button" class="btn mb-3 me-3"> Tambah Produk </a><button>
              </div>
          </div>
        </div>

      <!-- other cards -->
      <div class="container" id="other">
        <div class="row">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/c3.png" alt="" />
              <div class="card-img-overlay">
                <h3>Home Gadget</h3>
                <p>Latest collection Up To 50% Off</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/c4.png" alt="" />
              <div class="card-img-overlay">
                <h3>Gaming Gadget</h3>
                <p>Latest collection Up To 50% Off</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/c5.png" alt="" />
              <div class="card-img-overlay">
                <h3>Electronic Gadget</h3>
                <p>Latest collection Up To 50% Off</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- other cards -->

      <div class="row" style="margin-top: 30px">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr5.png" alt="" />
            <div class="card-body">
              <h3 class="text-center">Fan</h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                Rp 3.499.000 <span><li class="fa-solid fa-cart-shopping"></li></span>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr6.png" alt="" />
            <div class="card-body">
              <h3 class="text-center">Fridge</h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                Rp 13.499.000 <span><li class="fa-solid fa-cart-shopping"></li></span>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr7.png" alt="" />
            <div class="card-body">
              <h3 class="text-center">Gaming PC</h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                Rp 18.999.000 <span><li class="fa-solid fa-cart-shopping"></li></span>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="./images/pr8.png" alt="" />
            <div class="card-body">
              <h3 class="text-center">Moniter</h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2>
                Rp 8.299.000 <span><li class="fa-solid fa-cart-shopping"></li></span>
              </h2>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card ">
              <img href="tambah.php" src="https://cdn-icons-png.flaticon.com/128/6499/6499530.png" alt="" />
              <button><a href="tambah.php" type="button" class="btn mb-3 me-3"> Tambah Produk </a><button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- product cards -->

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
        <input type="text" placeholder="Enter Your Email.." />
        <button id="subscribe">SUBSCRIBE</button>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Services</a></li>
                <li><a href="contact.php">Terms of service</a></li>
                <li><a href="contact.php">Privacy policey</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

              <ul>
                <li><a href="index.php">PS 5</a></li>
                <li><a href="index.php">Computer</a></li>
                <li><a href="index.php">Gaming Laptop</a></li>
                <li><a href="index.php">Mobile Phone</a></li>
                <li><a href="index.php">Gaming Gadget</a></li>
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
      <hr />
      <div class="container py-4">
        <div class="NATASYA PUTRI">
          &copy; NATASYA PUTRI <strong><span>211250000401</span></strong
          >
        </div>
        <div class="credits">SISTEM INFORMASI <a href="#">"PEMROGRAMAN WEB"</a></div>
      </div>
    </footer>
    <!-- footer -->

    <a href="#" class="arrow"
      ><i><img src="./images/arrow.png" alt="" /></i
    ></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>