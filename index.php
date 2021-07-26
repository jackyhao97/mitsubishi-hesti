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
          <p class="mt-2 p-profile">Hesti, Sales counter Sardana Berlian yang sudah mengabdi selama bertahun - tahun. Pengalaman Hesti dalam menangani Customer sudah tidak usah diragukan lagi karena sudah banyak Customer Hesti yang senang bertransaksi dengan Hesti sendiri.
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
            <div class="swiper-slide">
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
            <div class="swiper-slide">
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
            <div class="swiper-slide">
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
            <div class="swiper-slide">
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
            <div class="swiper-slide">
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
            <div class="swiper-slide">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/fuso/box-besi.png'; ?>" class="card-img w-80" alt="Mitsubishi Fuso Medan">
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
            <div class="swiper-slide">
              <div class="card mb-3" style="max-width: 540px">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?= BASE_URL.DS.'assets/img/colt-diesel/colt-diesel.png'; ?>" class="card-img w-80" alt="Mitsubishi Colt Diesel Medan">
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
          <div class="col-12 col-sm-3 container-img-testimoni cp">            
            <a
              href="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
              data-lightbox="Testimoni"
              data-title="Testimoni Hesti Mitsubishi"              
            >
              <img
                src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
                alt="Testimoni Hesti Mitsubishi"
                class="img-testimoni"
              />
            </a>
          </div>
          <div class="col-12 col-sm-3 container-img-testimoni cp">            
            <a
              href="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
              data-lightbox="Testimoni"
              data-title="Testimoni Hesti Mitsubishi"              
            >
              <img
                src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
                alt="Testimoni Hesti Mitsubishi"
                class="img-testimoni"
              />
            </a>
          </div>      
          <div class="col-12 col-sm-3 container-img-testimoni cp">            
            <a
              href="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
              data-lightbox="Testimoni"
              data-title="Testimoni Hesti Mitsubishi"              
            >
              <img
                src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
                alt="Testimoni Hesti Mitsubishi"
                class="img-testimoni"
              />
            </a>
          </div>
          <div class="col-12 col-sm-3 container-img-testimoni cp">            
            <a
              href="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
              data-lightbox="Testimoni"
              data-title="Testimoni Hesti Mitsubishi"              
            >
              <img
                src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
                alt="Testimoni Hesti Mitsubishi"
                class="img-testimoni"
              />
            </a>
          </div>          
        </div>       
        <div class="row mt-4">
          <div class="col-12 col-sm-3 container-img-testimoni cp">            
            <a
              href="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
              data-lightbox="Testimoni"
              data-title="Testimoni Hesti Mitsubishi"              
            >
              <img
                src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
                alt="Testimoni Hesti Mitsubishi"
                class="img-testimoni"
              />
            </a>
          </div>
          <div class="col-12 col-sm-3 container-img-testimoni cp">            
            <a
              href="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
              data-lightbox="Testimoni"
              data-title="Testimoni Hesti Mitsubishi"              
            >
              <img
                src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
                alt="Testimoni Hesti Mitsubishi"
                class="img-testimoni"
              />
            </a>
          </div>      
          <div class="col-12 col-sm-3 container-img-testimoni cp">            
            <a
              href="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
              data-lightbox="Testimoni"
              data-title="Testimoni Hesti Mitsubishi"              
            >
              <img
                src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
                alt="Testimoni Hesti Mitsubishi"
                class="img-testimoni"
              />
            </a>
          </div>
          <div class="col-12 col-sm-3 container-img-testimoni cp">            
            <a
              href="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
              data-lightbox="Testimoni"
              data-title="Testimoni Hesti Mitsubishi"              
            >
              <img
                src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>"
                alt="Testimoni Hesti Mitsubishi"
                class="img-testimoni"
              />
            </a>
          </div>          
        </div>
        <div class="row mt-5 justify-content-center">
          <a class="btn btn-lg btn-danger" href="<?=BASE_URL.DS.'testimoni-hesti-mitsubishi-medan/'?>">Lebih Lengkap</a>
        </div>
      </div>
    </section>
    <!-- Akhir Testimoni -->

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
