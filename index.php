<?php
  // require_once "../config.php";
  require_once "config.php";
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
    <link rel="stylesheet" href="<?= BASE_URL.DS; ?>assets/css/style.css" />
    <title>Mitsubishi Hesti - Promo PPnBM Mitsubishi Medan</title>
  </head>
  <body>    
    <!-- Header -->
    <div class="container-fluid">
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
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/xpander/'?>">XPANDER <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-thumb.png'?>" alt="Mitsubishi Xpander" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/xpander-cross/'?>">XPANDER CROSS <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-cross-thumb.png'?>" alt="Mitsubishi Xpander Cross" class="img-dropdown"></a>
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

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=BASE_URL.DS.'assets/img/slider-rf-limited.jpg'?>" class="d-block w-100" alt="Mitsubishi Xpander Rockford Limited">
        </div>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'assets/img/slider-pajero-sport.jpg'?>" class="d-block w-100" alt="Mitsubishi Pajero Sport">
        </div>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'assets/img/slider-cv.jpg'?>" class="d-block w-100" alt="Mitsubishi Fuso & Colt Diesel">
        </div>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'assets/img/slider-eclipse-cross.jpg'?>" class="d-block w-100" alt="Mitsubishi Eclipse Cross">
        </div>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'assets/img/slider-triton.jpg'?>" class="d-block w-100" alt="Mitsubishi Triton">
        </div>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'assets/img/slider-xpander.jpg'?>" class="d-block w-100" alt="Mitsubishi Xpander">
        </div>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'assets/img/slider-xpander-cross.jpg'?>" class="d-block w-100" alt="Mitsubishi Xpander Cross">
        </div>        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Akhir Slider -->

    <!-- Profile -->
    <div class="container-100 outer-container-profile">
      <div class="row ml-0 mr-0 align-items-center">
        <div class="col-12 col-lg-6 text-center">
          <img class="bg-profile" src="<?= BASE_URL.DS.'assets/img/bg-foto.png'; ?>" alt="Hesti Ratnasari Karo Karo">
        </div>
        <div class="col-12 col-lg-6 container-profile">        
          <h1 class="mmc-bold">Hesti Surbakti</h1>
          <h5 class="mmc-bold">Counter Sales</h5>
          <p class="mt-2 p-profile">Hesti, Sales counter Sardana Berlian yang sudah melayani Customer Mitsubishi sejak 2016. Pengalaman Hesti dalam menangani Customer sudah tidak usah diragukan lagi karena sudah banyak Customer Hesti yang senang bertransaksi dengan Hesti sendiri.
          <div class="mb-5">
            <a target="_blank" href="https://wa.me/+6282370304974?text=Hai, Kak Hesti. Saya ingin bertanya tentang produk Mitsubishi." class="btn btn-danger">Hubungi Saya</a>
            <a href="<?=BASE_URL.DS.'testimoni-mitsubishi-medan/'?>" class="btn btn-danger">Testimoni</a>
          </div>
        </div>
      </div>      
    </div>
    <!-- Akhir Profile -->

    <!-- Product -->
    <section class="product" id="product">
      <div class="container">
        <div class="row mb-2 mt-4">
          <div class="col-md-12">
            <h2 class="title mmc-bold">PASSENGER CAR</h2>
          </div>
        </div>
        <div class="swiper-container swiper-container-xpander text-dark">
          <div class="swiper-wrapper">              
            <div class="swiper-slide" onclick="window.location='mitsubishi/xpander/'">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/red-ultimate-xpander.webp'; ?>" class="card-img w-80" alt="Mitsubishi Xpander Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Xpander</h5>
                      <div class="row">
                        <div class="col-12 desc-height">
                          <p class="text-justify">Generasi terbaru MPV yang diciptakan untuk menjawab semua keinginan keluarga Indonesia. </p>
                        </div>
                      </div>
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
            <div class="swiper-slide" onclick="window.location='mitsubishi/xpander-cross/'">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/cross/xpander-cross-gray.webp'; ?>" class="card-img w-80" alt="Mitsubishi Xpander Cross Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Xpander Cross</h5>
                      <div class="row">
                        <div class="col-12 desc-height">
                          <p class="text-justify">Xpander Cross adalah sebuah crossover yang memadukan kenyamanan sebuah MPV dengan ketangguhan SUV dan dilengkapi dengan tampilan yang lebih sporty dan tangguh.</p>
                        </div>
                      </div>
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
            <div class="swiper-slide" onclick="window.location='mitsubishi/pajero-sport/'">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/pajero/pajero-sport-white.webp'; ?>" class="card-img w-80" alt="Mitsubishi Pajero Sport Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Pajero Sport</h5>
                      <div class="row">
                        <div class="col-12 desc-height">
                          <p class="text-justify">Temukan dunia baru melalui eksplorasi tanpa batas dengan New Pajero Sport yang kini hadir lebih tangguh dengan teknologi canggih untuk menemani Anda melalui segala petualangan.</p>
                        </div>
                      </div>
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
            <div class="swiper-slide" onclick="window.location='mitsubishi/eclipse-cross/'">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/eclipse/eclipse-cross-red.webp'; ?>" class="card-img w-80" alt="Mitsubishi Eclipse Cross Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Eclipse Cross</h5>
                      <div class="row">
                        <div class="col-12 desc-height">
                          <p class="text-justify">Stimulating design, confident inspiring driving, dan human connectivity. Eclipse Cross pilihan tepat bagi pecinta SUV.</p>
                        </div>
                      </div>
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
          <div class="swiper-button-next swiper-button-next-custom swiper-button-next-xpander"></div>
          <div class="swiper-button-prev swiper-button-prev-custom swiper-button-prev-xpander"></div>
          <div class="swiper-pagination swiper-pagination-xpander"></div>
        </div>
        <div class="row mb-2 mt-4">
          <div class="col-md-12">
            <h2 class="title mmc-bold">LIGHT COMMERCIAL VEHICLE</h2>
          </div>
        </div>
        <div class="swiper-container swiper-container-xpander text-dark">
          <div class="swiper-wrapper">
            <div class="swiper-slide" onclick="window.location='mitsubishi/triton/'">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/triton/triton-gray.webp'; ?>" class="card-img w-80" alt="Mitsubishi Triton Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Triton</h5>
                      <div class="row">
                        <div class="col-12 desc-height">
                          <p class="text-justify">Triton 4X4 hadir dengan performa lebih tangguh dan fitur-fitur inovatif </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) as harga, merek, tipe FROM tb_harga WHERE merek = 'TRITON' AND discontinue = 0");
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
            <div class="swiper-slide" onclick="window.location='mitsubishi/l300/'">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/l300/1.webp'; ?>" class="card-img w-80" alt="Mitsubishi L300 Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi L300</h5>
                      <div class="row">
                        <div class="col-12 desc-height">
                          <p class="text-justify">Efisien dan memiliki ruang kargo luas yang didukung oleh mesin bertenaga </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) as harga, merek, tipe FROM tb_harga WHERE merek = 'L300' AND discontinue = 0");
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
          <div class="swiper-button-next swiper-button-next-custom swiper-button-next-xpander"></div>
          <div class="swiper-button-prev swiper-button-prev-custom swiper-button-prev-xpander"></div>
          <div class="swiper-pagination swiper-pagination-xpander"></div>
        </div>
        <div class="row mb-2 mt-4">
          <div class="col-md-12">
            <h2 class="title mmc-bold">COMMERCIAL VEHICLE</h2>
          </div>
        </div>
        <div class="swiper-container swiper-container-xpander text-dark">
          <div class="swiper-wrapper">
            <div class="swiper-slide" onclick="window.location='mitsubishi/fuso/'">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/fuso/box-besi.webp'; ?>" class="card-img w-80" alt="Mitsubishi Fuso Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Fuso</h5>
                      <div class="row">
                        <div class="col-12 desc-height-cv">
                          <p class="text-justify">Fuso merupakan truk kategori medium yang ekonomis dan dapat diandalkan untuk berbagai kebutuhan serta memiliki banyak keunggulan dari segi keamanan, kenyamanan, kinerja dan efisiens</p>
                          <p><span class="text-warning">Beban Muatan</span> <br> 10 - 24 TON</p>
                          <p><span class="text-warning">Roda</span> <br> 6 - 10 BAN</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) as harga, merek, tipe FROM tb_harga WHERE merek = 'FUSO' AND discontinue = 0");
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
            <div class="swiper-slide" onclick="window.location='mitsubishi/colt-diesel/'">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/colt-diesel/colt-diesel.webp'; ?>" class="card-img w-80" alt="Mitsubishi Colt Diesel Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Colt Diesel</h5>
                      <div class="row">
                        <div class="col-12 desc-height-cv">
                          <p class="text-justify">Sangat cocok untuk bak kayu, aluminium dump truck, serta kargo lainnya. Sesuai untuk pengusaha di industri pertambangan, ekspedisi, pertanian dan perkebunan</p>
                          <p><span class="text-warning">Beban Muatan</span> <br> 5 - 10 TON</p>
                          <p><span class="text-warning">Roda</span> <br> 4 - 6 BAN</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) as harga, merek, tipe FROM tb_harga WHERE merek = 'COLT DIESEL' AND discontinue = 0");
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
          <div class="swiper-button-next swiper-button-next-custom swiper-button-next-xpander"></div>
          <div class="swiper-button-prev swiper-button-prev-custom swiper-button-prev-xpander"></div>
          <div class="swiper-pagination swiper-pagination-xpander"></div>
        </div>       
      </div>
    </section>
    <!-- Akhir Product -->

    <!-- Testimoni -->
    <section class="testimoni mt-5" id="testimoni">
      <h1 class="text-center mmc-bold">Testimoni</h1>
      <div class="container">      
        <div class="row mt-4">
          <?php
            $query = $conn->query("SELECT nama,caption FROM tb_testimoni ORDER BY tgl_buat DESC");
            while ($row = $query->fetch_array()) {
          ?>
            <div class="col-12 col-sm-3 container-img-testimoni cp">            
              <a
                href="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>"
                data-lightbox="Testimoni"
                data-title="<?=$row['caption']?>"              
              >
                <img
                  src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>"
                  alt="<?=$row['caption']?>"
                  class="img-testimoni"
                />
              </a>
            </div>
          <?php
            }
          ?>     
        </div>
        <div class="row mt-5 justify-content-center">
          <a class="btn btn-lg btn-warning" href="<?=BASE_URL.DS.'testimoni-mitsubishi-medan/'?>">Lebih Lengkap</a>
        </div>
      </div>
    </section>
    <!-- Akhir Testimoni -->

    <section class="profile bg-light pt-5 pb-4" id="profile">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <img src="<?=BASE_URL.DS.'assets/img/testimoni/12.jpeg'?>" alt="Mitsubishi Medan Hesti" class="w-100">
          </div>
          <div class="col-sm-8 col-xs-12">
            <h1 class="text-danger mmc-bold">MAU TAU PROMO LAINNYA?</h1>
            <p class="text-danger font-weight-bold">Hubungi <span class="text-dark">Hesti Surbakti</span> disini</p>
            <hr style="background:red;border-top: 2px solid rgba(0,0,0,.1);">
            <div class="row text-dark">
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" height="60" viewBox="0 0 480 480" width="60"><path d="m339.27 136c-53.878-1.808-105.55-18.939-149.71-49.57-5.306-3.681-12.582.12-12.56 6.62 0 .2-.08 20.04-15.12 29.1-7.68 4.61-15.76 4.43-19.88 3.91-4.836-.594-9 3.181-9 7.94v76.13c0 58.99 48 106.99 107 106.99s107-48 107-106.99v-66.13c0-4.31-3.42-7.85-7.73-8zm-85.395 344h-27.751c-4.812 0-8.535-4.217-7.938-8.992l9.209-73.672c.612-4.899 5.493-8.155 10.203-6.674 1.438.452 3.345.453 4.787.004 4.72-1.47 9.606 1.763 10.219 6.669l9.209 73.673c.598 4.775-3.126 8.992-7.938 8.992zm-42.153-111.214-12.118 13.954c-2.156 2.482-6.219 1.449-6.926-1.762l-10.155-46.086c-.287-1.303 1.382-2.259 2.331-1.205l26.82 29.8c1.352 1.501 1.372 3.774.048 5.299zm68.673 13.953-12.118-13.953c-1.324-1.525-1.304-3.798.047-5.299l26.821-29.801c.929-1.032 2.625-.129 2.331 1.204l-10.155 46.087c-.707 3.211-4.77 4.244-6.926 1.762zm-78.582 90.253c-.5 4.003-3.904 7.008-7.938 7.008h-107.875c-4.418 0-8-3.582-8-8v-47.26c0-45.629 36.941-82.57 82.57-82.57 1.941 0 3.854-.169 5.727-.492.718-.124 1.409.319 1.566 1.031l14.325 65.012c1.411 6.404 9.544 8.485 13.853 3.524l7.141-8.223c2.591-2.984 7.479-.802 6.989 3.119zm200.187-48.252v47.26c0 4.418-3.582 8-8 8h-107.875c-4.035 0-7.438-3.004-7.938-7.008l-8.357-66.85c-.49-3.921 4.398-6.103 6.989-3.119l7.141 8.223c4.301 4.952 12.439 2.891 13.853-3.524l14.325-65.011c.157-.711.848-1.154 1.565-1.031 1.874.322 3.787.491 5.727.491 45.628-.001 82.57 36.939 82.57 82.569zm-30-337.2c0 101.629.015 95.29-.032 96.356-.255 5.786-8.968 5.496-8.968-.296v-39.6c0-12.901-10.226-23.54-23.19-23.99-49.4-1.654-98.425-17.094-141.13-46.73-15.843-10.994-37.636.316-37.68 19.68-.03.62-.59 11.39-7.37 15.47-3.55 2.14-7.57 2.02-9.64 1.76-14.481-1.823-26.99 9.554-26.99 23.81v49.6c0 5.791-8.714 6.081-8.968.296-.047-1.066-.032 5.466-.032-98.896 0-17.45 12.84-31.96 29.57-34.58 14.36-30.79 44.96-50.42 79.28-50.42h67.61c48.347 0 87.54 39.193 87.54 87.54zm-104.959 242.589c3.816-.859 6.49 3.66 3.873 6.567l-24.964 27.734c-3.18 3.54-8.72 3.54-11.9 0l-24.964-27.734c-2.617-2.907.057-7.426 3.873-6.567 17.709 3.985 36.335 3.993 54.082 0z"></path></svg>
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">SENIOR SALES CONSULTANT</h5>
                  <h5 class="mmc-bold text-danger">Hesti Surbakti</h5>
                </div>                
              </div>
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <svg width="60" height="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.685 31.685" style="enable-background:new 0 0 31.685 31.685;" xml:space="preserve"> <g> <path d="M22.507,0H9.175C7.9,0,6.87,1.034,6.87,2.309v27.07c0,1.271,1.03,2.306,2.305,2.306h13.332 c1.273,0,2.307-1.034,2.307-2.306V2.309C24.813,1.034,23.78,0,22.507,0z M23.085,25.672H8.599V3.895h14.486V25.672z M18.932,2.343 h-6.181V1.669h6.182L18.932,2.343L18.932,2.343z M21.577,2.035c0,0.326-0.266,0.59-0.591,0.59c-0.326,0-0.591-0.265-0.591-0.59 s0.265-0.59,0.591-0.59C21.312,1.444,21.577,1.709,21.577,2.035z M18.655,29.225h-5.629v-1.732h5.629V29.225z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">PHONE</h5>                  
                  <a href="tel:+6281262526666" class="mmc-bold text-danger">0812-6252-6666</a>
                </div>                
              </div>            
            </div>
            <div class="row text-dark">
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <img alt="" data-src="https://hondamedancenter.com/wp-content/uploads/2020/11/whatsapp.svg" class="attachment-medium size-medium lazyloaded" src="https://hondamedancenter.com/wp-content/uploads/2020/11/whatsapp.svg" width="60" height="60">
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">WHATSAPP</h5>
                  <a href="https://wa.me/+6281262526666?text=Halo Kak Hesti." class="mmc-bold text-danger">0812-6252-6666</a>
                </div>                
              </div>
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="60" viewBox="0 0 512 512" width="60"><g><path d="m476.861 456.764c-54.476 0-114.655 0-131.633 0v-31.867h121.165c-10.176-30.979-19.165-58.346-19.19-58.424-10.159 0-45.764 0-91.428 0-27.44 26.183-52.811 50.26-75.539 81.415l-24.238 33.225-24.235-33.227c-22.933-31.438-48.856-55.938-75.534-81.413-52.766 0-91.385 0-91.432 0-.158.483-9.091 27.676-19.19 58.424h121.165v31.867c-23.39 0-82.444 0-131.633 0-9.614 29.266-17.907 54.515-18.143 55.236h478.008c-.232-.709-8.527-25.964-18.143-55.236z"></path><path d="m256 430.207c72.315-99.128 175.27-137.375 175.27-254.938 0-100.434-74.836-175.269-175.27-175.269-100.402 0-175.27 74.835-175.27 175.27 0 117.547 102.988 155.841 175.27 254.937zm0-296.152c26.332 0 47.801 21.468 47.801 47.801 0 26.322-21.469 47.801-47.801 47.801-26.334 0-47.801-21.479-47.801-47.801 0-26.333 21.467-47.801 47.801-47.801z"></path></g></svg>
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">LOKASI DEALER</h5>
                  <a href="https://www.google.com/maps/place/Mitsubishi+Sardana+Medan+-+Gatot+Subroto/@3.5897229,98.6548474,17z/data=!3m1!4b1!4m5!3m4!1s0x30312f94a86ecdbb:0x83c7b521f607d461!8m2!3d3.5897229!4d98.6570361?hl=en" class="mmc-bold text-danger">JL. GATOT SUBROTO NO 437 MEDAN</a>                  
                </div>                
              </div>            
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php require_once 'footer.php'; ?>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>    
    <script src="<?= BASE_URL.DS; ?>assets/js/lightbox.js"></script>
    <script src="<?= BASE_URL.DS; ?>assets/js/script.js"></script>
  </body>
</html>
