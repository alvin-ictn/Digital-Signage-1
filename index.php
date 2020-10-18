<?php
include './conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Sholliwa</title>
</head>

<body>
  <div class="grid-container">
    <div class="profile">
      <div class="profile--content">
        <img src="./assets/images/logo.png" />
      </div>
    </div>
    <div class="slider">
      <div class="slider--content">
        <ul id="slider">
          <?php $dataslideutama = mysqli_query($con, "SELECT * FROM `slider`") or die(mysqli_error($con));
          $i = 0;
          while ($slide_utama = mysqli_fetch_array($dataslideutama)) {
            $i += 1; ?>
            <li class="panel<?php $i; ?>">
              <video autoplay muted loop style=" object-fit: fill;height:50%;">
                <source src="./konfigurasi/gambar/slide-utama/<?php echo $slide_utama[2]; ?>" type="video/mp4">
              </video>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="running">
      <div class="running--content">
        <?php
					$bodytext = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `beritagabung`ORDER BY ID DESC LIMIT 1"));
					$jeda = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `konfigurasi`"));
					?>
						<marquee style="font-size:45px;"><?php echo $bodytext[1]; ?></marquee>
      </div>
    </div>
    <div class="menu">
      <div class="menu--content">
        <div class="menu--content--item">Rabu, 28 Agutsus 2020</div>
        <div class="menu--content--item">
          <div class="menu--content--item--title">Konfirmasi</div>
          <div class="menu--content--item--info">12321321</div>
        </div>
        <div class="menu--content--item">
          <div class="menu--content--item--title">Isolasi</div>
          <div class="menu--content--item--info">12321321</div>
        </div>
        <div class="menu--content--item">
          <div class="menu--content--item--title">Rawat</div>
          <div class="menu--content--item--info">12321321</div>
        </div>
        <div class="menu--content--item">
          <div class="menu--content--item--title">Sembuh</div>
          <div class="menu--content--item--info">12321321</div>
        </div>
        <div class="menu--content--item">
          <div class="menu--content--item--title">Meninggal</div>
          <div class="menu--content--item--info">12321321</div>
        </div>
        <div class="menu--content--item">10:20:30</div>
      </div>
    </div>
  </div>
  <script src="./assets/jQuery/jquery-3.5.1.min.js"></script>
  <script src="./assets/bootstrap/js//bootstrap.min.js"></script>
</body>

</html>