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
          <a class="navbar-brand" href="index.php" id="logo"><span id="span1">Electronic </span>WoW <span>Store</span></a>
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
   
    <div class="container" id="contact">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-phone"> No. Telp</i>
                    <h6>+6289644149739</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-envelope"> Email</i>
                    <h6>electronicwowstore@gmail.com</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-location-dot"> Address</i>
                    <h6>Batealit Jepara 59461</h6>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Nama">
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Email">
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="No. Telp">
            </div>
            <div  class="form-group" style="margin-top: 30px;">
            </div>
            <button><a href="contact.php" type="button-center" class="btn mb-3 me-3"> Message </a><button>
        </div>
    </div>
    
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
              <h3>Electronic Shop</h3>
              <p>
                Jawa <br>
                Bali <br>
                Sumatra <br>
              </p>
              <strong>Phone:</strong> +6289644149739 <br>
              <strong>Email:</strong> electronicwowstore@.com <br>
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
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
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