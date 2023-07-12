<?php 
//memasukkan file config.php
include('config.php');
?>
<!DOCTYPE html>
<html>
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><b>Electronic WoW Store</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="tambah.php">Tambah Produk</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
	<div class="container" style="margin-top:20px">
		<h2>Tambah Produk</h2>
		
		<hr>
		<!-- proses -->
		<?php
		if(isset($_POST['submit'])){
      $id_produk      = $_POST['id_produk'];
			$nama_produk    = $_POST['nama_produk'];
			$harga          = $_POST['harga'];
			$keterangan     = $_POST['keterangan'];
      $insert_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id_produk'") or die(mysqli_error($conn));
      if(mysqli_num_rows($insert_produk) == 0){
        $folder ='./produk/';
        $nama_foto = $_FILES['foto']['name'];
        $rename = date('Hs').$nama_foto;
        $sumber_foto  = $_FILES['foto']['tmp_name'];
        move_uploaded_file($sumber_foto,$folder.$rename);

        $sql_produk = mysqli_query($conn, "INSERT INTO produk(id_produk, nama_produk, harga, foto_produk, keterangan) VALUES('$id_produk','$nama_produk', '$harga', '$rename', '$keterangan')") or die(mysqli_error($conn));
          if($sql_produk){
            echo '<script>alert("Berhasil menambahkan data."); document.location="tambah.php";</script>';
          }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
          }
        }else{
          echo '<div class="alert alert-warning">Gagal, ID sudah terdaftar.</div>';
        }
    }
		?>
    <!-- end proses -->
    <!-- form -->
		<form action="tambah.php" method="post" enctype="multipart/form-data">
      <div class="form-group row mb-3">
				<label class="col-sm-2 col-form-label">ID PRODUK</label>
				<div class="col-sm-10">
					<input type="text" name="id produk" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row mb-3">
				<label class="col-sm-2 col-form-label">NAMA PRODUK</label>
				<div class="col-sm-10">
					<input type="text" name="nama produk" class="form-control" required>
				</div>
			</div>
      <div class="form-group row mb-3">
				<label class="col-sm-2 col-form-label">foto</label>
				<div class="col-sm-10">
					<input type="file" id="image" name="foto" >
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">HARGA</label>
				<div class="col-sm-10">
					<input type="text" name="harga" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KETERANGAN</label>
				<div class="col-sm-10">
					<input type="text" name="keterangan" class="form-control" required>
				</div>
			</div>
      
      <div class="form-group row mb-3">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
        </div>
      </div>
		</form>
	</div>
  <!-- end form -->

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

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>