<?php
  session_start();
  require_once '../config.php';
  require_once '../functions.php';  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL.DS.'assets/css/lightbox.css'; ?>">      
    <script src="https://kit.fontawesome.com/00610b519d.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="<?= BASE_URL.DS ?>assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= BASE_URL.DS; ?>assets/css/style.css" />
    <title>Promo Mitsubishi Medan - Hesti</title>
  </head>
  <body style="background:#f2f2f2;color:black">  
    <div class="container-fluid">
      <marquee direction="left" scrollAmount="7" onmouseover="this.stop()" onmouseout="this.start()">        
        <p class="text-danger mmc-bold" style="font-style: italic;margin-bottom:0">PROMO Pajak PPnBM 0%, Harga Turun Drastis, Diskon Besar Besaran, Bunga Kredit 0% Dan Free Aksesoris. Promo Hanya Berlaku Setiap Pemesanan Melalui Website Ini.. <span class="text-primary mmc-bold">Ajukan penawaran sekarang di <a href="https://wa.me/+6281262526666?text=Halo Kak Hesti." target="_blank" class="mmc-bold text-success" style="margin-left: 10px"><i class="fa fa-whatsapp"></i> 0812-6252-6666</a><span></p>
      </marquee>      
    </div>

    <!-- Header -->
    <div class="container-fluid bg-dark text-white">
      <div class="row p-2">
        <div class="col-12 col-sm-6 container-logo">
          <a href="<?=BASE_URL?>">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana-panjang.png" alt="Mitsubishi Sardana Medan" class="logo">
          </a>
        </div>        
        <div class="col-12 col-sm-6 text-right">
          <p style="margin-bottom: .3rem">Sales resmi PT. Sardana IndahBerlian Motor</p>
          <a href="https://wa.me/+6281262526666" class="btn btn-danger hubungi">Hubungi Saya</a>
        </div>
      </div>
    </div>
    <!-- Akhir Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-navbar">
      <a class="navbar-brand text-success mmc-bold font-navbar-whatsapp" target="_blank" href="https://wa.me/+6281262526666?text=Halo Kak Hesti">
        <i class="fab fa-lg fa-whatsapp"></i> 0812-6252-6666
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">   
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL?>">Home</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="btn btn-dark dropdown-toggle dropdown-produk text-uppercase mmc-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: black; border: 1px solid black">Produk</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background: black; padding: 0">
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/pajero-sport/'?>">PAJERO SPORT <img src="<?=BASE_URL.DS.'assets/img/thumbs/pajero-sport-thumb.png'?>" alt="Mitsubishi Pajero Sport" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/xpander-cross/'?>">XPANDER <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-thumb.png'?>" alt="Mitsubishi Xpander" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/xpander/'?>">XPANDER CROSS <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-cross-thumb.png'?>" alt="Mitsubishi Xpander Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/eclipse-cross/'?>">ECLIPSE CROSS <img src="<?=BASE_URL.DS.'assets/img/thumbs/eclipse-cross-thumb.png'?>" alt="Mitsubishi Eclipse Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/triton/'?>">TRITON <img src="<?=BASE_URL.DS.'assets/img/thumbs/triton-thumb.png'?>" alt="Mitsubishi Triton" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/l300/'?>">L300 <img src="<?=BASE_URL.DS.'assets/img/thumbs/l300-thumb.png'?>" alt="Mitsubishi L300" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/colt-diesel/'?>">COLT DIESEL <img src="<?=BASE_URL.DS.'assets/img/thumbs/colt-diesel-thumb.png'?>" alt="Mitsubishi Colt Diesel" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/fuso/'?>">FUSO <img src="<?=BASE_URL.DS.'assets/img/thumbs/fuso-thumb.png'?>" alt="Mitsubishi Fuso" class="img-dropdown"></a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL.DS.'promo-mitsubishi-medan/'?>">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL.DS.'testimoni-mitsubishi-medan/'?>">Testimoni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL.DS.'harga-mitsubishi-medan/'?>">Price List</a>
          </li>          
        </ul>        
      </div>
    </nav>  
    <!-- Akhir Navbar -->

    <div class="container container-price">  
      <div class="card mb-3" style="font-size: 14px">
        <div class="row no-gutters align-items-center">
          <div class="col-md-4">
            <img src="<?=BASE_URL.DS.'assets/img/price/xpander.png'?>" alt="Harga Mitsubishi Xpander di Medan" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Xpander</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Xpander</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE (merek = 'xpander' OR merek = 'xpander black edition') AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Xpander dapat menghubungi <b><a href="https://wa.me/+6281262526666?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Xpander." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 081262526666</a></b></p>
            </div>
          </div>
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-8 order-2 order-sm-1">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Xpander Cross</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Xpander Cross</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'XPANDER CROSS' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Xpander Cross dapat menghubungi <b><a href="https://wa.me/+6281262526666?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Xpander Cross." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 081262526666</a></b></p>
            </div>
          </div>
          <div class="col-md-4 order-1 order-sm-2">
            <img src="<?=BASE_URL.DS.'assets/img/price/xpander-cross.png'?>" alt="Harga Mitsubishi Xpander Cross di Medan" class="w-100">
          </div>
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-4">
            <img src="<?=BASE_URL.DS.'assets/img/price/pajero-sport.png'?>" alt="Harga Mitsubishi Pajero Sport di Medan" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Pajero Sport</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Pajero Sport</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'PAJERO SPORT' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Pajero Sport dapat menghubungi <b><a href="https://wa.me/+6281262526666?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Pajero Sport." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 081262526666</a></b></p>
            </div>
          </div>    
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-8 order-2 order-sm-1">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Eclipse Cross</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Eclipse Cross</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'ECLIPSE CROSS' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Eclipse Cross dapat menghubungi <b><a href="https://wa.me/+6281262526666?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Eclipse Cross." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 081262526666</a></b></p>
            </div>
          </div>
          <div class="col-md-4 order-1 order-sm-2">
            <img src="<?=BASE_URL.DS.'assets/img/price/eclipse-cross.png'?>" alt="Harga Mitsubishi Eclipse Cross di Medan" class="w-100">
          </div>
        </div>    
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-4">
            <img src="<?=BASE_URL.DS.'assets/img/price/l300.png'?>" alt="Harga Mitsubishi L300 di Medan" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi L300</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi L300</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'L300' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi L300 dapat menghubungi <b><a href="https://wa.me/+6281262526666?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi L300." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 081262526666</a></b></p>
            </div>
          </div>   
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-8 order-2 order-sm-1">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Triton</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Triton</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'TRITON' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Triton dapat menghubungi <b><a href="https://wa.me/+6281262526666?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Triton" style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 081262526666</a></b></p>
            </div>
          </div>    
          <div class="col-md-4 order-1 order-sm-2">
            <img src="<?=BASE_URL.DS.'assets/img/price/triton.png'?>" alt="Harga Mitsubishi Triton di Medan" class="w-100">
          </div>
        </div>
        <div class="row no-gutters align-items-center mt-5">
          <div class="col-md-4">
            <img src="<?=BASE_URL.DS.'assets/img/price/colt-diesel.png'?>" alt="Harga Mitsubishi Colt Diesel di Medan" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Colt Diesel</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Colt Diesel</caption>
                <thead class="bg-warning text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'COLT DIESEL' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Colt Diesel dapat menghubungi <b><a href="https://wa.me/+6281262526666?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Colt Diesel." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 081262526666</a></b></p>
            </div>
          </div>   
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-8 order-2 order-sm-1">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Fuso</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Fuso</caption>
                <thead class="bg-warning text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'FUSO' AND discontinue = 0 ORDER BY harga");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Fuso dapat menghubungi <b><a href="https://wa.me/+6281262526666?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Fuso" style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 081262526666</a></b></p>
            </div>
          </div>    
          <div class="col-md-4 order-1 order-sm-2">
            <img src="<?=BASE_URL.DS.'assets/img/price/fuso.png'?>" alt="Harga Mitsubishi Fuso di Medan" class="w-100">
          </div>
        </div>
      </div>  
    </div>

    <!-- Footer -->
    <?php require_once '../footer.php'; ?>
    <!-- Akhir Footer -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <script src="<?= BASE_URL.DS ?>assets/js/bootstrap-select.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>    
    <script src="<?= BASE_URL.DS; ?>assets/js/lightbox.js"></script>
    <script src="<?= BASE_URL.DS; ?>assets/js/script.js"></script>
  </body>
</html>