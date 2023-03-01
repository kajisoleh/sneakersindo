<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sneakers indo</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'templates/navbar.php'; ?>

<!-- konten   -->
<section class="content">
  <div class="container">
    <h1>Sneakers indo</h1>
    <br>
    <div class="row">
      <?php
      $ambil = $koneksi->query("SELECT * FROM produk");
      while($perproduk = $ambil->fetch_assoc()):
      ?>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="foto_produk/<?= $perproduk['foto_produk']; ?>">
          <div class="caption">
            <h3><?= $perproduk['nama_produk']; ?></h3>
            <h5>Rp. <?= number_format($perproduk['harga_produk']); ?>,-</h5>
            <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
            <a href="detail.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-default">Detail</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
  
</body>
</html>