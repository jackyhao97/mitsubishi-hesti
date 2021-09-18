<?php
  session_start();
  require_once '../../config.php';
  require_once '../../functions.php';  
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
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <title>Mitsubishi Pajero Sport Medan - Hesti</title>
  </head>
  <body style="background:white;color:black">    
    <!-- Header -->
    <div class="container-fluid" style="background: #e3e3e3">
      <div class="row p-2">
        <div class="col-12 col-sm-6 container-logo">
          <a href="<?=BASE_URL?>">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana-panjang.png" alt="Mitsubishi Sardana Medan" class="logo">
          </a>
        </div>        
        <div class="col-12 col-sm-6 text-sales">
          <p style="margin-bottom: .3rem">Sales resmi PT. Sardana IndahBerlian Motor</p>
          <a href="https://wa.me/+6282274190043" class="btn btn-danger hubungi">Hubungi Saya</a>
        </div>
      </div>
    </div>
    <!-- Akhir Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-navbar">
      <a class="navbar-brand text-success mmc-bold font-navbar-whatsapp" target="_blank" href="https://wa.me/+6282274190043?text=Halo Kak Hesti">
        <i class="fab fa-lg fa-whatsapp"></i> 0822-7419-0043
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

    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel-inner">        
        <div class="carousel-item active">
          <img src="<?=BASE_URL.DS.'assets/img/slider-pajero-sport.jpg'?>" class="d-block w-100" alt="Mitsubishi Pajero Sport">
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
    <!-- akhir slider -->

    <!-- Main -->
    <section class="mainProduct" id="mainProduct">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-6 col-12">
            <h3 id="carTitle" class="mmc-bold">MITSUBISHI PAJERO SPORT EXCEED (4X2) MT</h3>
          </div>        
          <div class="col-lg-6 col-12 select-car">        
            <select class="selectpicker" id="selectTipe" data-width="100%" data-live-search="true">            
              <option value="009">PAJERO SPORT EXCEED (4X2) MT</option>
              <option value="008">PAJERO SPORT EXCEED (4X2) AT</option>
              <option value="010">PAJERO SPORT GLX (4X4) MT</option>
              <option value="007">PAJERO SPORT DAKAR (4X2) AT</option>          
              <option value="006">PAJERO SPORT DAKAR ULTIMATE (4X2) AT</option>
              <option value="005">PAJERO SPORT DAKAR (4X4) AT</option>
            </select>        
          </div>        
        </div>
        <div class="row justify-content-between">
          <div class="col-lg-6 pr-lg-5 scale-down">
            <div class="row">
              <div class="col-lg-12" style="border: 1px solid #aaa">
                <div class="swiper swiper-container-mitsubishi-pajero-sport">                
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">                
                      <a href="https://mitsubishimedan-vandys.id/assets/img/pajero/1.webp" data-lightbox="view-pajero-sport" class="display">
                        <img src="https://mitsubishimedan-vandys.id/assets/img/pajero/1.webp" width="100%">
                      </a>                  
                    </div>                
                    <div class="swiper-slide">
                      <a href="https://mitsubishimedan-vandys.id/assets/img/pajero/8.webp" data-lightbox="view-pajero-sport" class="display">
                        <img src="https://mitsubishimedan-vandys.id/assets/img/pajero/8.webp" width="100%">
                      </a>                  
                    </div>                                         
                    <div class="swiper-slide">
                      <a href="https://mitsubishimedan-vandys.id/assets/img/pajero/7.webp" data-lightbox="view-pajero-sport" class="display">
                        <img src="https://mitsubishimedan-vandys.id/assets/img/pajero/7.webp" width="100%">
                      </a>                  
                    </div>                
                    <div class="swiper-slide">
                      <a href="https://mitsubishimedan-vandys.id/assets/img/pajero/6.webp" data-lightbox="view-pajero-sport" class="display">
                        <img src="https://mitsubishimedan-vandys.id/assets/img/pajero/6.webp" width="100%">
                      </a>     
                    </div>  
                    <div class="swiper-slide">
                      <a href="https://mitsubishimedan-vandys.id/assets/img/pajero/5.webp" data-lightbox="view-pajero-sport" class="display">
                        <img src="https://mitsubishimedan-vandys.id/assets/img/pajero/5.webp" width="100%">
                      </a>                  
                    </div>                     
                    <div class="swiper-slide">
                      <a href="https://mitsubishimedan-vandys.id/assets/img/pajero/4.webp" data-lightbox="view-pajero-sport" class="display">
                        <img src="https://mitsubishimedan-vandys.id/assets/img/pajero/4.webp" width="100%">
                      </a>                  
                    </div>                     
                    <div class="swiper-slide">
                      <a href="https://mitsubishimedan-vandys.id/assets/img/pajero/3.webp" data-lightbox="view-pajero-sport" class="display">
                        <img src="https://mitsubishimedan-vandys.id/assets/img/pajero/3.webp" width="100%">
                      </a>                  
                    </div>                     
                    <div class="swiper-slide">
                      <a href="https://mitsubishimedan-vandys.id/assets/img/pajero/2.webp" data-lightbox="view-pajero-sport" class="display">
                        <img src="https://mitsubishimedan-vandys.id/assets/img/pajero/2.webp" width="100%">
                      </a>                  
                    </div>                     
                  </div>
                  <div class="swiper-button-next swiper-button-next-mitsubishi-pajero-sport" style="color: black"></div>
                  <div class="swiper-button-prev swiper-button-prev-mitsubishi-pajero-sport" style="color: black"></div>
                </div>
              </div>
            </div>
            <div class="row spek-desktop">
              <div class="col-lg-12" style="border: 1px solid #aaa">
                <div class="row">
                  <div class="col-lg-12 text-center background-title p-2">
                    <h6 class="font-weight-bold text-white mt-1">Price List</h6>
                  </div>
                </div>
                <div class="row spek-container">
                  <?php
                    $query = $conn->query("SELECT harga, tipe, merek FROM tb_harga WHERE merek = 'PAJERO SPORT' AND discontinue = 0 ORDER BY urutan");
                    while ($row = $query->fetch_assoc()) :
                  ?>
                    <div class="col-lg-6 col-md-6 mt-2">
                      <label><?=$row['merek'].' '.$row['tipe']?></label>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-2">
                      <label class="mmc-bold"><?="Rp ".number_format($row["harga"], 0, ",", ".")?></label>
                    </div>
                  <?php
                    endwhile;
                  ?>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center p-2 background-title">
                    <h6 class="font-weight-bold text-white mt-1">Kontak Kami</h6>
                  </div>
                </div>
                <div class="row mt-3 mb-3">
                  <div class="col-lg-12 d-flex justify-content-between">
                    <span><i class="fas fa-lg fa-user"></i> Hesti Surbakti</span>
                    <a href="https://wa.me/+6282274190043?text=Halo Kak Hesti, Saya ingin bertanya tentang Mitsubishi Pajero Sport" target="_blank" class="text-success"><i class="fab fa-lg fa-whatsapp"></i> 0812 6252 6666
                    </a>
                  </div>                                                  
                </div>
                <div class="row mb-3">
                  <div class="col-lg-12 text-center">
                    <a href="https://wa.me/+6282274190043?text=Halo Kak Hesti." target="_blank" class="btn btn-danger">Chat</a>
                    <a class="btn btn-danger" href="<?=BASE_URL.DS.'brosur/pajero-sport.pdf'?>" target="_blank">Download E-Brochure</a>
                  </div> 
                </div>
              </div>  
            </div>
          </div>
          <div class="col-lg-6 scale-down" style="border: 1px solid #aaa">          
            <div class="row">
              <div class="col-lg-12 text-center background-title p-2">
                <h6 class="font-weight-bold text-white mt-1">Harga Mobil</h6>
              </div>
            </div>
            <form>
              <div class="form-group row d-flex justify-content-between">
                <label for="plainTextHargaOtr" class="font-weight-bold col-lg-4 col-5 col-form-label">Harga OTR :</label>
                <div class="col-lg-8 col-7">
                  <?php
                    $tampil = $conn->query("SELECT MIN(harga) FROM tb_harga WHERE merek = 'PAJERO SPORT' AND discontinue = 0");
                    $harga = $tampil->fetch_array();                
                    $harga = $harga[0];
                  ?>
                  <input type="text" readonly class="font-weight-bold form-control-plaintext text-right" id="plainTextHargaOtr" value="<?= "Rp " . number_format($harga, 0, ",", "."); ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12 text-right">
                  <a class="btn btn-danger" href="https://wa.me/+6282274190043?text=Halo Kak Hesti. Saya ingin beli tunai Mitsubishi Pajero Sport. Gimana prosedurnya?" target="_blank">Beli Tunai</a>
                </div>
                <div class="col-lg-12"><hr class="hr-perhitungan" style="margin-bottom: 0 !important" /></div>
                <div class="col-lg-12">
                  <small class="text-muted">* Kredit</small>
                </div>          
              </div>
              <div class="form-group row">
                <label for="plainTextTotalUangMuka" class="col-lg-4 col-6 col-form-label">Total Uang Muka :</label>
                <div class="col-lg-8 col-6">
                  <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextTotalUangMuka" value="Rp 0">
                </div>
              </div>
              <div class="form-group row">
                <label for="plainTextCicilan" class="col-lg-4 col-5 col-form-label">Cicilan / Bulan : </label>
                <div class="col-lg-8 col-7">
                  <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextCicilan" value="Rp 0">
                </div>
              </div>    
              <div class="form-group row">
                <label for="plainTextTenor" class="col-lg-4 col-5 col-form-label">Tenor (Bulan): </label>
                <div class="col-lg-8 col-7">
                  <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextTenor" value="Rp 0">
                </div>
              </div>     
              <div class="form-group row">
                <div class="col-lg-12 text-right">
                  <a class="btn btn-danger" href="https://wa.me/+6282274190043?text=Halo Kak Hesti, Saya mau panjar Mitsubishi Pajero Sport. Gimana caranya?" target="_blank">Booking Fee</a>
                </div>
                <div class="col-lg-12"><hr class="hr-perhitungan" style="margin-bottom: 0 !important" /></div>
                <div class="col-lg-12">
                  <small class="text-muted">* Simulasi Kredit</small>
                </div>
              </div>      
              <div class="form-group row">
                <label for="inputUangMuka" class="col-lg-6 col-md-6 col-12 col-form-label">Uang Muka : </label>
                <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
                  <input type="text" class="width-100 form-control form-control-sm form-control-width" id="inputUangMuka" name="inputUangMuka" pattern="^\Rp\d{1,3}(.\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="Rp 10.000.000">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputSukuBunga" class="col-lg-6 col-md-6 col-12 col-form-label">Suku Bunga (% per tahun) : </label>
                <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
                  <input type="number" class="width-100 form-control form-control-sm form-control-width" id="inputSukuBunga" placeholder="10">
                </div>
              </div>
              <div class="form-group row">
                <label for="selectTenor" class="col-lg-6 col-md-6 col-12 col-form-label">Tenor (bulan) : </label>
                <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
                  <select class="width-100 form-control form-control-sm form-control-width" class="selectTenor" id="selectTenor">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12 text-right">
                  <a class="btn btn-danger" name="buttonHitung" id="buttonHitung">Hitung</a>
                </div>
                <div class="col-lg-12 text-center perhitungan" style="display: none">
                  <small class="text-success">* Perhitungan selesai. Silahkan cek kembali harga.</small>              
                </div>
                <div class="col-lg-12 text-center perhitungan-salah" style="display: none">
                  <small class="text-danger">* Uang DP minimum Rp 20 juta. Silahkan hitung kembali.</small>              
                </div>
                <div class="col-lg-12"><hr class="hr-perhitungan" style="margin-bottom: 0 !important" /></div>
              </div>                        
              <div class="form-group row mt-1">
                <div class="col-lg-12 text-justify">
                  <small class="text-muted">* Harga On The Road Sumut per <?= date('F Y'); ?>.</small>
                </div>
                <div class="col-lg-12 text-justify">
                  <small class="text-muted">* Harga dapat berubah sewaktu-waktu.</small>
                </div>
                <div class="col-lg-12 text-justify">
                  <small class="text-muted">* Simulasi ini hanya sebagai asumsi belum termasuk biaya admin dll. Untuk estimasi cicilan sesungguhnya bisa telepon atau chat via Whatsapp pada kolom Kontak Kami dibawah ini.</small>
                </div>                      
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Main -->

    <section class="interior mt-5" id="interior">
      <div class="container">
        <div class="row align-items-center interior-up">
          <div class="col-12 col-md-5 container-interior">
            <h1 class="mmc-bold">Interior</h1>
            <a
              class="btn btn-danger"
              href="https://wa.me/+6285262526666?text=Halo Kak Hesti"
              target="_blank"
            >
              <span class="mmc-bold">ORDER NOW</span>
            </a>
          </div>
          <div class="col-12 col-md-7">
            <p class="desc-interior">
              Interior mewah dan gagah namun tetap memberikan kesan lega dan nyaman.
            </p>
          </div>
        </div>
      </div>
      <div class="swiper swiper-container-interior mb-3">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/1.jpg"
                data-lightbox="interior"
                data-title="Tough and Luxury Interior"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/1.jpg"
                  alt="Tough and Luxury Interior"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/2.jpg"
                data-lightbox="interior"
                data-title="New 8 Inch Color LCD Meter"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/2.jpg"
                  alt="New 8 Inch Color LCD Meter"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/3.jpg"
                data-lightbox="interior"
                data-title="Head Unit With Smartphone-Link Display Audio"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/3.jpg"
                  alt="Head Unit With Smartphone-Link Display Audio"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/4.jpg"
                data-lightbox="interior"
                data-title="New Auto Dimming Rear View Mirror"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/4.jpg"
                  alt="New Auto Dimming Rear View Mirror"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/5.jpg"
                data-lightbox="interior"
                data-title="Stylish Floor Console With Soft Pad"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/5.jpg"
                  alt="Stylish Floor Console With Soft Pad"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/6.jpg"
                data-lightbox="interior"
                data-title="Dual Zone Automatic AC"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/6.jpg"
                  alt="Dual Zone Automatic AC"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/7.jpg"
                data-lightbox="interior"
                data-title="Electric Parking Brake + New Brake Auto Hold"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/7.jpg"
                  alt="Electric Parking Brake + New Brake Auto Hold"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/8.jpg"
                data-lightbox="interior"
                data-title="Comfortable Interior Side"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/8.jpg"
                  alt="Comfortable Interior Side"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/12.jpg"
                data-lightbox="interior"
                data-title="Spacious Baggage"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/interior/12.jpg"
                  alt="Spacious Baggage"
                  class="w-100"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="exterior mt-5" id="exterior">
      <div class="container">
        <div class="row align-items-center interior-up">
          <div class="col-12 col-md-5">
            <p class="desc-interior">
              Desain rangka eksterior yang kokoh dan dinamis memberikan pengalaman berkendara yang kuat dan stabil di segala medan.
            </p>
          </div>
          <div class="col-12  col-md-7 container-exterior">
            <h1 class="mmc-bold">Exterior</h1>
            <a
              class="btn btn-danger"
              href="https://wa.me/+6285262526666?text=Halo Kak Hesti"
              target="_blank"
            >
              <span class="mmc-bold">ORDER NOW</span>
            </a>
          </div>          
        </div>
      </div>
      <div class="swiper swiper-container-exterior mb-3">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/1.jpg"
                data-lightbox="interior"
                data-title="New Active Cornering Lamp"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/1.jpg"
                  alt="New Active Cornering Lamp"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/2.jpg"
                data-lightbox="interior"
                data-title="New Rear Combination Lamp"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/2.jpg"
                  alt="New Rear Combination Lamp"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/3.jpg"
                data-lightbox="interior"
                data-title="Sunroof"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/3.jpg"
                  alt="Sunroof"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/4.jpg"
                data-lightbox="interior"
                data-title="New 18'' Sporty Alloy Wheel"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/4.jpg"
                  alt="New 18'' Sporty Alloy Wheel"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/5.jpg"
                data-lightbox="interior"
                data-title="New Shark Fin Antenna"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/5.jpg"
                  alt="New Shark Fin Antenna"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/6.jpg"
                data-lightbox="interior"
                data-title="Sporty Rear Spoiler"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/6.jpg"
                  alt="Sporty Rear Spoiler"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/7.jpg"
                data-lightbox="interior"
                data-title="Dynamic Shield"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/7.jpg"
                  alt="Dynamic Shield"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/8.jpg"
                data-lightbox="interior"
                data-title="New Power Tailgate with Kick Sensor"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/8.jpg"
                  alt="New Power Tailgate with Kick Sensor"
                  class="w-100"
                />
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a
                href="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/9.jpg"
                data-lightbox="interior"
                data-title="New LED Headlamp Design"
              >
                <img
                  src="https://mitsubishimedan-vandys.id/assets/img/pajero/exterior/9.jpg"
                  alt="New LED Headlamp Design"
                  class="w-100"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>    
  
    <!-- Footer -->
    <?php require_once '../../footer.php'; ?>
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
    <script>  
      $(function() {    
        $('[data-toggle="tooltip"]').tooltip();
        let rpFormat = new Intl.NumberFormat('id-id', {
            style: 'currency',
            currency: 'IDR'
        });    

        function setWarna() {
          $('[data-toggle="tooltip"]').tooltip();
          $('.color-black').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-black.png'));
          $('.color-red').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-red.png'));
          $('.color-silver').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-silver.png'));
          $('.color-grey').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-grey.png'));
          $('.color-white').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-white.png'));
          $('.color-bronze').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-bronze.png'));      
        }

        $('#selectTipe').change(function() {                  
          let kode = $('#selectTipe').val();
          let tipe = $('#selectTipe option:selected').text();      
          $.ajax ({
            type: "post",
            data: {kode: kode, tipe: tipe},
            url: "../../json/data-pajero-sport.php",
            success: function(data) {
              let hasil = JSON.parse(data);
              let totalCicilan = 0.2 * hasil.harga;
              let cicilanPerBulan = (hasil.harga - totalCicilan) / 60;
              let tampilTotalCicilan = rpFormat.format(totalCicilan);
              let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
              let hargaOtr = rpFormat.format(hasil.harga);
              $('#carTitle').html('MITSUBISHI PAJERO SPORT ' + hasil.tipe);
              $('#plainTextHargaOtr').val(hargaOtr.substring(0, hargaOtr.length - 3));

              if (window.matchMedia("(min-width: 800px)").matches) {
                $('#spekDesktop').removeClass('spek-container-hidden').addClass('spek-container');
                $('#spekMobile').removeClass('spek-container').addClass('spek-container-hidden');
              } else if (window.matchMedia("(max-width: 600px)").matches) {
                $('#spekDesktop').removeClass('spek-container').addClass('spek-container-hidden');
                $('#spekMobile').removeClass('spek-container-hidden').addClass('spek-container');
              }                    
              $('.spek-container #spek1').text(hasil.transmission);
              $('.spek-container #spek2').text(hasil.displacement);
              $('.spek-container #spek3').text(hasil.wheel);
              $('.spek-container #spek4').text(hasil.srs);
              $('.spek-container #spek5').text(hasil.hill);
              $('.spek-container #spek6').text(hasil.keyless);
              $('.spek-container #spek7').text(hasil.ground);   
              $('#plainTextTotalUangMuka').val(tampilTotalCicilan.substring(0, tampilTotalCicilan.length - 3));
              $('#plainTextCicilan').val(tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3));
              $('#plainTextTenor').val('59 Bulan');  
              $('#inputUangMuka').val('');
              $('#inputSukuBunga').val('');    
              $('.perhitungan').css('display', 'none');
            }
          });
        });

        setWarna();
        
        $("#buttonHitung").click(function () {           
          let sukuBunga = parseFloat($("#inputSukuBunga").val());
          let tenor = parseInt($("#selectTenor option:selected").val());
          let uangMuka = parseInt(
            $("#inputUangMuka").val().substr(3).replace(/\./g, "")
          );
          let hargaOtr = parseInt(
            $("#plainTextHargaOtr").val().substr(3).replace(/\./g, "")
          );

          // Perhitungan
          if (uangMuka < 20000000)
          {      
            $(".perhitungan").css("display", "none");
            $(".perhitungan-salah").css("display", "block");
          }
          else
          {
            let pokokCicilan = hargaOtr - uangMuka;
            let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
            let totalCicilan = pokokCicilan + bungaCicilan;
            let cicilanPerBulan = totalCicilan / tenor;
            let totalUangMuka = uangMuka + cicilanPerBulan;
            let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
            let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);        
            $("#plainTextTotalUangMuka").val(
              tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
            );
            $("#plainTextCicilan").val(
              tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
            );
            $("#plainTextTenor").val(tenor - 1 + " bulan");        
            $(".perhitungan-salah").css("display", "none");
            $(".perhitungan").css("display", "block");
            }
        });

        // Hitung Langsung onload
        let hargaOtr = parseInt(
          $("#plainTextHargaOtr").val().substr(3).replace(/\./g, "")
        );
        let totalCicilan = 0.2 * hargaOtr;
        let cicilanPerBulan = (hargaOtr - totalCicilan) / 60;
        let tampilTotalCicilan = rpFormat.format(totalCicilan);
        let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
        $("#plainTextTotalUangMuka").val(
          tampilTotalCicilan.substring(0, tampilTotalCicilan.length - 3)
        );
        $("#plainTextCicilan").val(
          tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
        );
        $("#plainTextTenor").val("59 Bulan");

        // Swiper
        const swiperContainer = [
          ".swiper-container-interior",
          ".swiper-container-exterior",
        ];
        swiperContainer.forEach((v) => {
          new Swiper(v, {            
            slidesPerView: "auto",            
            breakpoints: {
              0: {
                slidesPerView: 1,
              },
              576: {
                slidesPerView: 2,
              },
              769: {
                slidesPerView: 3,
              },
            },
          });
        });
      });
    </script>
  </body>
</html>