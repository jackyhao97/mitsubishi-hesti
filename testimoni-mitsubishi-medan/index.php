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
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/new-xpander/'?>">NEW XPANDER <img src="<?=BASE_URL.DS.'assets/img/thumbs/new-xpander-thumb.png'?>" alt="Mitsubishi New Xpander" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/new-xpander-cross/'?>">NEW XPANDER CROSS <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-cross-thumb.png'?>" alt="Mitsubishi New Xpander Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'mitsubishi/pajero-sport/'?>">PAJERO SPORT <img src="<?=BASE_URL.DS.'assets/img/thumbs/pajero-sport-thumb.png'?>" alt="Mitsubishi Pajero Sport" class="img-dropdown"></a>
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

    <section class="testimoni" id="testimoni">
      <h1 class="text-center mmc-bold">Testimoni</h1>
      <div class="container">    
        <div class="row">  
        <?php
          $query = $conn->query("SELECT nama,caption FROM tb_testimoni ORDER BY tgl_buat DESC");
          while ($row = $query->fetch_array()) {
        ?>
          <div class="col-12 col-sm-3 container-img-testimoni cp mt-4">            
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
      </div>
    </section>

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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>    
    <script src="<?= BASE_URL.DS; ?>assets/js/lightbox.js"></script>
    <script src="<?= BASE_URL.DS; ?>assets/js/script.js"></script>
  </body>
</html>