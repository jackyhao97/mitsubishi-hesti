<?php
  require_once "../config.php";
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
        <div class="col-12 col-sm-6">
          <a target="_blank" href="javascript:void(0)">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana-panjang.png" alt="Mitsubishi Sardana Medan" class="logo">
          </a>
        </div>        
        <div class="col-12 col-sm-6 text-right">
          <p style="margin-bottom: .3rem">Sales resmi PT. Sardana IndahBerlian Motor</p>
          <a href="https://wa.me/+6281262526666" class="btn btn-danger">Hubungi Saya</a>
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
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/pajero-sport.php'?>">PAJERO SPORT <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/new-pajero-sport-thumb.png" alt="Mitsubishi Pajero Sport" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/xpander.php'?>">XPANDER <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-thumb.png'?>" alt="Mitsubishi Xpander" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/xpander-cross.php'?>">XPANDER CROSS <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-cross-thumb.png'?>" alt="Mitsubishi Xpander Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/eclipse-cross.php'?>">ECLIPSE CROSS <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/eclipse-cross-thumb.png" alt="Mitsubishi Eclipse Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/triton.php'?>">TRITON <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/triton-thumb.png" alt="Mitsubishi Triton" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/l300.php'?>">L300 <img src="<?=BASE_URL.DS.'assets/img/thumbs/l300-thumb.png'?>" alt="Mitsubishi L300" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/colt-diesel.php'?>">COLT DIESEL <img src="https://sardanagroup.co.id/fuso-medan/assets/img/thumbnails/CD01.png" alt="Mitsubishi Colt Diesel" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/fuso.php'?>">FUSO <img src="https://sardanagroup.co.id/fuso-medan/assets/img/thumbnails/FS01.png" alt="Mitsubishi Fuso" class="img-dropdown"></a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL.DS.'promo.php'?>">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL.DS.'testimoni.php'?>">Testimoni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL.DS.'testimoni.php'?>">Price List</a>
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
            <a target="_blank" href="https://wa.me/+6282370304974?text=Hai, Kak Vandys. Saya ingin bertanya tentang produk Mitsubishi" class="btn btn-danger">Hubungi Saya</a>
            <a href="" class="btn btn-danger">Testimoni</a>
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
            <h2 class="title">PASSENGER CAR</h2>
          </div>
        </div>
        <div class="swiper-container swiper-container-xpander text-dark">
          <div class="swiper-wrapper">
            <?php
              $sql = $conn->query("SELECT * FROM tb_harga WHERE (merek = 'XPANDER' OR merek = 'XPANDER BLACK EDITION') AND discontinue = 0 ORDER BY merek DESC, urutan");
              while ($row = $sql->fetch_assoc()) :
                $dp = 0.2 * $row["harga"];
                $cicilan = ($row["harga"] - $dp) / 60;
            ?>      
            <div class="swiper-slide">
              <form action="product/xpander/" method="post">          
                <div class="card mb-3" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                      <img src="<?= BASE_URL.DS.'assets/img/xpander/red-ultimate-xpander.webp'; ?>" class="card-img w-80" alt="Mitsubishi Xpander Medan">
                    </div>
                    <div class="col-md-12">
                      <div class="card-body">
                        <h5 class="card-title text-center">Mitsubishi Xpander</h5>
                        <div class="row">
                          <div class="col-5">Harga mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></div>
                        </div>
                        <div class="row">
                          <div class="col-5">DP (20%) mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($dp, 0, ",", "."); ?></div>
                        </div>
                        <div class="row">
                          <div class="col-5">Cicilan (5thn) mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($cicilan, 0, ",", ".") . " / Bulan"; ?></div>
                        </div>     
                        <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara<br />* DP dan Cicilan merupakan estimasi, belum termasuk bunga, Asuransi, dll.</small></p>
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="hidden" name="title" value="<?= $row['tipe']; ?>">
                            <input type="hidden" name="price" value="<?= $row['harga']; ?>">
                            <input type="hidden" name="category" value="<?= $row['merek']; ?>">
                            <input type="hidden" name="kode" value="<?= $row['kode']; ?>">
                            <input type="hidden" name="varian" value="<?= $row['varian']; ?>">
                            <button type="submit" class="btn btn-danger" name="cmdSubmit">Telusuri</button>
                          </div>
                        </div>
                      </div>
                    </div>              
                  </div>   
                </div>          
              </form>              
            </div>      
            <?php endwhile; ?>
          </div>
          <div class="swiper-button-next swiper-button-next-custom swiper-button-next-xpander"></div>
          <div class="swiper-button-prev swiper-button-prev-custom swiper-button-prev-xpander"></div>
          <div class="swiper-pagination swiper-pagination-xpander"></div>
        </div>
        <div class="row mb-2 mt-4">
          <div class="col-md-12">
            <h2 class="title">LIGHT COMMERCIAL VEHICLE</h2>
          </div>
        </div>
        <div class="swiper-container swiper-container-xpander text-dark">
          <div class="swiper-wrapper">
            <?php
              $sql = $conn->query("SELECT * FROM tb_harga WHERE (merek = 'TRITON' OR merek = 'L300') AND discontinue = 0 ORDER BY merek DESC, urutan");
              while ($row = $sql->fetch_assoc()) :
                $dp = 0.2 * $row["harga"];
                $cicilan = ($row["harga"] - $dp) / 60;
            ?>      
            <div class="swiper-slide">
              <form action="product/xpander/" method="post">          
                <div class="card mb-3" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                      <img src="<?= BASE_URL.DS.'assets/img/xpander/red-ultimate-xpander.webp'; ?>" class="card-img w-80" alt="Mitsubishi Xpander Medan">
                    </div>
                    <div class="col-md-12">
                      <div class="card-body">
                        <h5 class="card-title text-center">Mitsubishi Xpander</h5>
                        <div class="row">
                          <div class="col-5">Harga mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></div>
                        </div>
                        <div class="row">
                          <div class="col-5">DP (20%) mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($dp, 0, ",", "."); ?></div>
                        </div>
                        <div class="row">
                          <div class="col-5">Cicilan (5thn) mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($cicilan, 0, ",", ".") . " / Bulan"; ?></div>
                        </div>     
                        <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara<br />* DP dan Cicilan merupakan estimasi, belum termasuk bunga, Asuransi, dll.</small></p>
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="hidden" name="title" value="<?= $row['tipe']; ?>">
                            <input type="hidden" name="price" value="<?= $row['harga']; ?>">
                            <input type="hidden" name="category" value="<?= $row['merek']; ?>">
                            <input type="hidden" name="kode" value="<?= $row['kode']; ?>">
                            <input type="hidden" name="varian" value="<?= $row['varian']; ?>">
                            <button type="submit" class="btn btn-danger" name="cmdSubmit">Telusuri</button>
                          </div>
                        </div>
                      </div>
                    </div>              
                  </div>   
                </div>          
              </form>              
            </div>      
            <?php endwhile; ?>
          </div>
          <div class="swiper-button-next swiper-button-next-custom swiper-button-next-xpander"></div>
          <div class="swiper-button-prev swiper-button-prev-custom swiper-button-prev-xpander"></div>
          <div class="swiper-pagination swiper-pagination-xpander"></div>
        </div>
        <div class="row mb-2 mt-4">
          <div class="col-md-12">
            <h2 class="title">COMMERCIAL VEHICLE</h2>
          </div>
        </div>
        <div class="swiper-container swiper-container-xpander text-dark">
          <div class="swiper-wrapper">
            <?php
              $sql = $conn->query("SELECT * FROM tb_harga WHERE (merek = 'FUSO' OR merek = 'COLT DIESEL') AND discontinue = 0 ORDER BY merek DESC, urutan");
              while ($row = $sql->fetch_assoc()) :
                $dp = 0.2 * $row["harga"];
                $cicilan = ($row["harga"] - $dp) / 60;
            ?>      
            <div class="swiper-slide">
              <form action="product/xpander/" method="post">          
                <div class="card mb-3" style="max-width: 540px">
                  <div class="row no-gutters">
                    <div class="col-md-12 text-center">
                      <img src="<?= BASE_URL.DS.'assets/img/xpander/red-ultimate-xpander.webp'; ?>" class="card-img w-80" alt="Mitsubishi Xpander Medan">
                    </div>
                    <div class="col-md-12">
                      <div class="card-body">
                        <h5 class="card-title text-center">Mitsubishi Xpander</h5>
                        <div class="row">
                          <div class="col-5">Harga mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></div>
                        </div>
                        <div class="row">
                          <div class="col-5">DP (20%) mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($dp, 0, ",", "."); ?></div>
                        </div>
                        <div class="row">
                          <div class="col-5">Cicilan (5thn) mulai</div>
                          <div class="col-7"><?= "Rp " . number_format($cicilan, 0, ",", ".") . " / Bulan"; ?></div>
                        </div>     
                        <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara<br />* DP dan Cicilan merupakan estimasi, belum termasuk bunga, Asuransi, dll.</small></p>
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="hidden" name="title" value="<?= $row['tipe']; ?>">
                            <input type="hidden" name="price" value="<?= $row['harga']; ?>">
                            <input type="hidden" name="category" value="<?= $row['merek']; ?>">
                            <input type="hidden" name="kode" value="<?= $row['kode']; ?>">
                            <input type="hidden" name="varian" value="<?= $row['varian']; ?>">
                            <button type="submit" class="btn btn-danger" name="cmdSubmit">Telusuri</button>
                          </div>
                        </div>
                      </div>
                    </div>              
                  </div>   
                </div>          
              </form>              
            </div>      
            <?php endwhile; ?>
          </div>
          <div class="swiper-button-next swiper-button-next-custom swiper-button-next-xpander"></div>
          <div class="swiper-button-prev swiper-button-prev-custom swiper-button-prev-xpander"></div>
          <div class="swiper-pagination swiper-pagination-xpander"></div>
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
