<?php
include '../layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ura arms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Image Gallery</h2>
  <p>disilah produk kami berada</p>
  <p>tiga gambar ini adalah produk terbaik kami</p>
  <p>melamat melihat</p>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/gambar/cz805.png" target="_blank">
          <img src="../gambar/cz805.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p>CZ805</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="../gambar/hk416.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p>HK416</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="../gambar/sar21.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>SAR 21</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

</body>
</html>


<?php
include '../layout/footer.php';
?>