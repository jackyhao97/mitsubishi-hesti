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
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background: black; padding: 0;z-index: 1001">
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

    <!-- content -->
    <?php
      $result = $conn->query("SELECT * FROM tb_promo WHERE id = (SELECT MAX(id) FROM tb_promo)");
      $row = $result->fetch_array();
    ?>
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-8 col-12">
          <h2 class="mmc-bold text-center"><?=$row["judul"]?></h2>
          <img src="<?=BASE_URL.DS.'assets/img/promo/'.$row['img_path']?>" alt="Promo Mitsubishi" class="w-100 mb-4">
          <?=$row["deskripsi"]?>
        </div>
        <div class="col-lg-4 col-12 fixed-promo">
          <div class="swiper-container swiper-container-promo text-dark">
            <div class="swiper-wrapper">
              <div class="swiper-slide" id="promo-xpander">
                <div class="card mb-3" style="max-width: 540px;background:black;color:white">
                  <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                      <img src="<?= BASE_URL.DS.'assets/img/xpander/red-ultimate-xpander.webp'; ?>" class="card-img w-80" alt="Mitsubishi Xpander Medan">
                    </div>
                    <div class="col-md-12">
                      <div class="card-body">
                        <h5 class="card-title text-center mmc-bold">Mitsubishi Xpander</h5>                        
                        <hr style="border-top: 3px solid rgba(0,0,0,.1);background:red">
                        <div class="row">
                          <div class="col-5 mmc-bold">Harga mulai</div>
                          <?php
                            $sql = $conn->query("SELECT MIN(harga) as harga, merek, tipe FROM tb_harga WHERE merek = 'XPANDER' AND discontinue = 0");
                            $row = $sql->fetch_assoc();
                          ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></div>
                        </div>                        
                        <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara</small></p>
                      </div>
                    </div>              
                  </div>   
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mb-3" id="promo-xpander-cross" style="max-width: 540px;background:black;color:white">
                  <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                      <img src="<?= BASE_URL.DS.'assets/img/cross/xpander-cross-gray.webp'; ?>" class="card-img w-80" alt="Mitsubishi Xpander Cross Medan">
                    </div>
                    <div class="col-md-12">
                      <div class="card-body">
                        <h5 class="card-title text-center mmc-bold">Mitsubishi Xpander Cross</h5>                  
                        <hr style="border-top: 3px solid rgba(0,0,0,.1);background:red">
                        <div class="row">
                          <div class="col-5 mmc-bold">Harga mulai</div>
                          <?php
                            $sql = $conn->query("SELECT MIN(harga) as harga, merek, tipe FROM tb_harga WHERE merek = 'XPANDER CROSS' AND discontinue = 0");
                            $row = $sql->fetch_assoc();
                          ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></div>
                        </div>                        
                        <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara</small></p>
                      </div>
                    </div>              
                  </div>   
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mb-3" id="promo-pajero-sport" style="max-width: 540px;background:black;color:white">
                  <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                      <img src="<?= BASE_URL.DS.'assets/img/pajero/pajero-sport-white.webp'; ?>" class="card-img w-80" alt="Mitsubishi Pajero Sport Medan">
                    </div>
                    <div class="col-md-12">
                      <div class="card-body">
                        <h5 class="card-title text-center mmc-bold">Mitsubishi Pajero Sport</h5>                 
                        <hr style="border-top: 3px solid rgba(0,0,0,.1);background:red">
                        <div class="row">
                          <div class="col-5 mmc-bold">Harga mulai</div>
                          <?php
                            $sql = $conn->query("SELECT MIN(harga) as harga, merek, tipe FROM tb_harga WHERE merek = 'PAJERO SPORT' AND discontinue = 0");
                            $row = $sql->fetch_assoc();
                          ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></div>
                        </div>                        
                        <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara</small></p>
                      </div>
                    </div>              
                  </div>   
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mb-3" id="promo-eclipse-cross" style="max-width: 540px;background:black;color:white">
                  <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                      <img src="<?= BASE_URL.DS.'assets/img/eclipse/eclipse-cross-red.webp'; ?>" class="card-img w-80" alt="Mitsubishi Eclipse Cross Medan">
                    </div>
                    <div class="col-md-12">
                      <div class="card-body">
                        <h5 class="card-title text-center mmc-bold">Mitsubishi Eclipse Cross</h5>                   
                        <hr style="border-top: 3px solid rgba(0,0,0,.1);background:red">
                        <div class="row">
                          <div class="col-5 mmc-bold">Harga mulai</div>
                          <?php
                            $sql = $conn->query("SELECT MIN(harga) as harga, merek, tipe FROM tb_harga WHERE merek = 'ECLIPSE CROSS' AND discontinue = 0");
                            $row = $sql->fetch_assoc();
                          ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></div>
                        </div>                        
                        <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara</small></p>
                      </div>
                    </div>              
                  </div>   
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>      
    </div>
    <!-- akhir content -->

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