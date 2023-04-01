<?php

require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Pembelian telah berhasil!');
            document.location.href = 'index.html';
        </script>";
    } else {
      echo "
        <script>
          alert('Pembelian gagal');
          document.location.href = 'index.php';
        </script>";
    }
}
if (!$result){
  echo mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="apple-touch-icon" href="img/icon.png" />
    <link rel="stylesheet" href="css/payment.css" />
    <link rel="icon" href="img/logo.png" type="image/png" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet" />

    <title>PenTesTer | Payment Form</title>
  </head>
  <body>
    <div class="text-container">
      <h1 class="my-4">PAYMENT</h1>
    </div>
    <div class="container">
      <form class="container w-50 p-4" action="" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="Masukan nama" required />
        </div>
        <div class="input-group flex-nowrap mb-3">
          <span class="input-group-text" id="addon-wrapping">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="username" id="username" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Contoh : abc@mail.xyz" required />
          <div id="emailHelp" class="form-text" style="color: black">We'll never share your email with anyone else.</div>
        </div>
        <select class="form-select" aria-label="Default select example" id="produk" name="produk">
          <option selected value="Free">Pilih Paket</option>
          <option value="SSL">SSL - $1</option>
          <option value="DDOS">DDOS - $25</option>
          <option value="XSS">XSS - $50</option>
          <option value="VIP">VIP - $145</option>
        </select>
        <br />
        <div class="mb-3">
          <label for="No WA" class="form-label">Nomor WA</label>
          <input type="text" class="form-control" id="wa" name="wa" aria-describedby="wa" placeholder="Contoh : 628123456789" data-inputmask="+62 812-345-678-999" required />
        </div>
        <div style="text-align: right">
          <button type="submit" class="btn btn-primary" name="submit" onclick="return confirm('Apakah anda yakin data ini sudah benar?');" >Submit</button>
        </div>
      </form>
    </div>
    <div class="footer-dark">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <h3>Services</h3>
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="feature.html">Features</a></li>
                <li><a href="order.php">New Order</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
              <h3>About</h3>
              <ul>
                <li><a href="about.html">Company</a></li>
                <li><a href="about.html#team">Team</a></li>
                <li><a href="about.html#aboutus">Office</a></li>
              </ul>
            </div>
            <div class="col-md-6 item text">
              <h3>Company Detail</h3>
              <p>
                Perusahaan ini berdiri sejak 2023, atas dasar tugas UTS dari mata kuliah pemrograman web pada semester 4 yang diberikan oleh dosen pengampu mata kuliah tersebut. Jika ada kesamaan / ketersinggungan maka saya pribadi mohon
                maaf.
              </p>
            </div>
            <div class="col item social">
              <a href="www.facebook.com"><i class="icon ion-social-facebook"></i></a>
              <a href="www.twitter.com"><i class="icon ion-social-twitter"></i></a>
              <a href="www.youtube.com"><i class="icon ion-social-youtube"></i></a>
              <a href="www.instagram.com"><i class="icon ion-social-instagram"></i></a>
            </div>
          </div>
          <p class="copyright">Naffsvn © 2023</p>
        </div>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/payment.js"></script>
  </body>
</html>