<?php
require 'functions.php';
$jumlahDataPerHalaman = 10;
$jumlahData = count(query("SELECT * FROM pesanan ORDER BY no DESC LIMIT 100"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// menentukan halaman aktif
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$data = query ("SELECT * FROM pesanan ORDER BY no DESC LIMIT $awalData, $jumlahDataPerHalaman");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

    <link rel="apple-touch-icon" href="img/icon.png" />
    <link rel="stylesheet" href="css/order.css" />
    <link rel="icon" href="img/logo.png" type="image/png" />

    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet" />

    <title>PenTesTer | Order</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" style="height: 50px" /> PenTesT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="index.html">Home</a>
            <a class="nav-item nav-link" href="pricing.html">Pricing</a>
            <a class="nav-item nav-link" href="feature.html">Features</a>
            <a class="nav-item nav-link active" href="order.php">New Order <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="about.html">About</a>
            <a class="nav-item nav-link btn btn-primary text-white tombol" href="payment.php">Buy Now</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">
          <span><br />Last Customer Orders</span>
        </h1>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Username</th>
            <th scope="col">Product</th>
            <th scope="col">Day</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($data as $row): ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $row["username"]?></td>
            <td><?= $row["produk"]?></td>
            <td><?= $row["day"]?></td>
            <td><?= $row["date"]?></td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
          <?php if(empty($data)): ?>
          <tr>
            <td colspan="5">
              <h4 style="text-align: center;">Data tidak ditemukan</h4>
            </td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
      <div class="page" style="text-align: center;">
      <?php if($halamanAktif > 1) : ?>
            <a href="?halaman=<?= $halamanAktif - 1; ?>" style="font-weight:light; color:black;">&lt;</a>
        <?php endif; ?>
        <?php if($halamanAktif > 2) : ?>
            <a href="?halaman=<?= $halamanAktif - 2; ?>" style="font-weight:light; color:black;">&laquo;</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
            <?php if($i == $halamanAktif) : ?>
                <a href="?halaman=<?= $i; ?>" style="font-weight:bold; color:black; font-size: large;"><?= $i; ?></a>
            <?php else : ?>
                <a href="?halaman=<?= $i; ?>" style="font-weight:light; color:black;"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if($halamanAktif < $jumlahHalaman) : ?>
            <a href="?halaman=<?= $halamanAktif + 1; ?>" style="font-weight:light; color:black;">&gt;</a>
        <?php endif; ?>
        <?php if($halamanAktif < $jumlahHalaman - 1) : ?>
            <a href="?halaman=<?= $halamanAktif + 2; ?>" style="font-weight:light; color:black;">&raquo;</a>
        <?php endif; ?>
        </div>
    </div>
    <br />
    <div class="footer-dark">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <h3>Services</h3>
              <ul>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/order.js"></script>
  </body>
</html>
