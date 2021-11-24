<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>BrandQu - Layanan Jasa Desain</title>
      <link rel="stylesheet" href="assets/css/home.css">
      <link rel="icon" href="assets/images/logo_BrandQuTop.png"></link>
      <!-- awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="h-100 w-100" style="box-sizing: border-box; background: linear-gradient(#F9E5D7, #F5E9E1);">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      .header-2-3 .modal-backdrop.show {
      }

      .header-2-3 .modal-item.modal {
        top: 2rem;
      }

      .header-2-3 .navbar,
      .header-2-3 .hero {
        padding: 3rem 2rem;
      }

      .header-2-3 .navbar-dark .navbar-nav .nav-link {
        font: 300 18px/1.5rem Poppins, sans-serif;
        color: #260041;
        transition: 0.3s;
      }

      .header-2-3 .navbar-dark .navbar-nav .nav-link:hover {
        font: 600 18px/1.5rem Poppins, sans-serif;
        color: #260041;
        transition: 0.3s;
      }

      .header-2-3 .navbar-dark .navbar-nav .active>.nav-link,
      .header-2-3 .navbar-dark .navbar-nav .nav-link.active,
      .header-2-3 .navbar-dark .navbar-nav .nav-link.show,
      .header-2-3 .navbar-dark .navbar-nav .show>.nav-link {
        font-weight: 600;
        transition: 0.3s;
      }

      .header-2-3 .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-2-3 .btn:focus,
      .header-2-3 .btn:active {
        outline: none !important;
      }

      .header-2-3 .btn-fill {
        font: 600 18px / normal Poppins, sans-serif;
        background-color: #EF6807;
        border-radius: 12px;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-3 .btn-fill:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-3 .btn-no-fill {
        font: 300 18px/1.75rem Poppins, sans-serif;
        color: #000000;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-3 .btn-no-fill:hover {
        color: #EF6807;
      }

      .header-2-3 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
        transition: 0.3s;
      }

      .header-2-3 .responsive li a {
        padding: 1rem;
        transition: 0.3s;
      }

      .header-2-3 .left-column {
        margin-bottom: 2.75rem;
        width: 100%;
      }

      .header-2-3 .text-caption {
        font: 600 0.875rem/1.625 Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #EF6807;
      }

      .header-2-3 .title-text-big {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #000000;
      }

      .header-2-3 .btn-try {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: #EF6807;
        transition: 0.3s;
      }

      .header-2-3 .btn-try:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-3 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        border: 1px solid #000000;
        color: #000000;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: transparent;
        transition: 0.3s;
      }

      .header-2-3 .btn-outline:hover {
        border: 1px solid #FFFFFF;
        color: #FFFFFF;
        transition: 0.3s;
      }

      .header-2-3 .btn-outline:hover div path {
        fill: #FFFFFF;
        transition: 0.3s;
      }

      .header-2-3 .right-column {
        width: 100%;
      }

      @media (min-width: 576px) {
        .header-2-3 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-2-3 .navbar {
          padding: 3rem 2rem;
        }

        .header-2-3 .hero {
          padding: 3rem 2rem 5rem;
        }

        .header-2-3 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-2-3 .navbar {
          padding: 3rem 4rem;
        }

        .header-2-3 .hero {
          padding: 3rem 4rem 5rem;
        }

        .header-2-3 .left-column {
          margin-bottom: 3rem;
        }
      }

      @media (min-width: 992px) {
        .header-2-3 .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 1.25rem;
          padding-left: 1.25rem;
        }

        .header-2-3 .navbar {
          padding: 3rem 6rem;
        }

        .header-2-3 .hero {
          padding: 3rem 6rem 5rem;
        }

        .header-2-3 .left-column {
          width: 50%;
          margin-bottom: 3%;
        }

        .header-2-3 .title-text-big {
          font-size: 3.75rem;
          line-height: 1.2;
        }

        .header-2-3 .right-column {
          width: 50%;
        }
      }
    </style>
    <div class="container-xxl mx-auto p-0  position-relative header-2-3" style="font-family: 'Poppins', sans-serif;">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#">
          <img style="margin-right:0.75rem"
            src="assets/images/logo_header.png">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content border-0" style="background-color: #141432;">
              <div class="modal-header border-0" style="padding:  2rem; padding-bottom: 0;">
                <a class="modal-title" id="targetModalLabel">
                  <img id="img-fluid" class="h-auto mw-100"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header4/Header-4-1.png"
                      alt="" />
                </a>
                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0;">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="home.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="tentang.html">Tentang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="produk.html">Produk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="keranjang.php">Keranjang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding:  2rem; padding-top: 0.75rem">
                <button class="btn btn-fill border-0 text-white">LOGOUT</button>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.html">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.html">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
          </ul>
          <div class="gap-3">
            <span class="btn btn-fill border-0 text-white"><a href="logout.php" style="color:white">LOGOUT</a></span>
          </div>
        </div>
      </nav>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <p class="text-caption">Layanan Jasa Desain</p>
            <h1 class="title-text-big">Buat Desain Kece Dan Berkualitas<br class=" d-lg-block d-none"> Hanya di BrandQu</h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <button class="btn d-inline-flex mb-md-0 btn-try text-white border-0">Facebook</button>
              <button class="btn btn-outline">
                <div class="d-flex align-items-center">
                  <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.9293 8L6.66668 5.158V10.842L10.9293 8ZM12.9173 8.27734L5.85134 12.988C5.80115 13.0214 5.74283 13.0406 5.6826 13.0435C5.62238 13.0463 5.5625 13.0328 5.50934 13.0044C5.45619 12.9759 5.41175 12.9336 5.38075 12.8818C5.34976 12.8301 5.33337 12.771 5.33334 12.7107V3.28934C5.33337 3.22904 5.34976 3.16989 5.38075 3.11817C5.41175 3.06645 5.45619 3.0241 5.50934 2.99564C5.5625 2.96719 5.62238 2.95368 5.6826 2.95656C5.74283 2.95944 5.80115 2.9786 5.85134 3.012L12.9173 7.72267C12.963 7.75311 13.0004 7.79435 13.0263 7.84273C13.0522 7.89111 13.0658 7.94513 13.0658 8C13.0658 8.05488 13.0522 8.1089 13.0263 8.15728C13.0004 8.20566 12.963 8.2469 12.9173 8.27734Z"
                      fill="#707092" />
                  </svg>
                  <a href="https://www.instagram.com/brandqu.id/">Instagram</a>
                </div>
              </button>
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header4/Header-4-1.png">
          </div>

        </div>
      </div>
    </div>
  </section><section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-1 .btn:focus,
      .content-3-1 .btn:active {
        outline: none !important;
      }

      .content-3-1 {
        padding: 5rem 2rem;
      }

      .content-3-1 .img-hero {
        width: 100%;
        margin-bottom: 3rem;
      }

      .content-3-1 .right-column {
        width: 100%;
      }

      .content-3-1 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 2.5rem;
        letter-spacing: -0.025em;
        color: #121212;
      }

      .content-3-1 .title-caption {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 1.25rem;
        color: #121212;
      }

      .content-3-1 .circle {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        height: 3rem;
        width: 3rem;
        margin-bottom: 1.25rem;
        border-radius: 9999px;
        background-color: #ffbf56;
      }

      .content-3-1 .text-caption {
        margin-left: 70px;
        font: 400 1rem/1.75rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-3-1 .btn-learn {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2.5rem;
        background-color: #ff7c57;
        transition: 0.3s;
        letter-spacing: 0.025em;
        border-radius: 0.75rem;
      }

      .content-3-1 .btn-learn:hover {
        background-color: #ff9779;
        transition: 0.3s;
      }

      @media (min-width: 768px) {
        .content-3-1 .title-text {
          font: 600 2.25rem/2.5rem Poppins, sans-serif;
        }
      }

      @media (min-width: 992px) {
        .content-3-1 .img-hero {
          width: 50%;
          margin-bottom: 0;
        }

        .content-3-1 .right-column {
          width: 50%;
        }

        .content-3-1 .circle {
          margin-right: 1.25rem;
          margin-bottom: 0;
        }
      }
    </style>
    <br>
    <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">
          <img id="hero" class="img-fluid"
            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-1.png"
            alt="" />
        </div>

        <!-- Right Column -->
        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
          <h2 class="title-text">Keunggulan BrandQu</h2>
          <ul class="p-0 m-0">
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  1
                </span>
                Pengerjaan Desain Cepat
              </h4>
              <p class="text-caption">
                Anda tidak perlu menunggu desain dengan waktu yang<br class="d-sm-inline d-none" />lama! Hemat waktu banget!
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  2
                </span>
                Banyak Promo Menarik 
              </h4>
              <p class="text-caption">
                Buat kalian yang low budget, ada banyak promo menarik<br class="d-sm-inline d-none" />
                dari kita loh! pantengin terus sosial media kami ya!
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 4rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  3
                </span>
                Desain Original 
              </h4>
              <p class="text-caption">
                Tidak perlu mikirin desain karena sudah ada yang buat<br class="d-sm-inline d-none" />
                dan pastinya sesuai dengan ekspektasi Anda.
              </p>
            </li>
          </ul>
      </div>
    </div>
  </section><section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-2-1 .btn:focus,
      .content-2-1 .btn:active {
        outline: none !important;
      }

      .content-2-1 .title-text {
        padding-top: 1rem;
        margin-bottom: 2rem;
      }

      .content-2-1 .text-title {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        color: #121212;
        margin-bottom: 0.625rem;
      }

      .content-2-1 .text-caption {
        color: #121212;
        font-weight: 300;
      }

      .content-2-1 .column {
        padding: 2rem 2.25rem;
      }

      .content-2-1 .icon {
        margin-bottom: 1.5rem;
      }

      .content-2-1 .icon-title {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
        color: #121212;
      }

      .content-2-1 .icon-caption {
        font: 400 1rem/1.625 Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-2-1 .card-block {
        padding: 1rem 1rem 5rem;
      }

      .content-2-1 .card {
        padding: 1.75rem;
        background-color: #fff7f4;
        border-radius: 0.75rem;
        border: 1px solid #ff7c57;
      }

      .content-2-1 .card-title {
        font: 600 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
        color: #000000;
      }

      .content-2-1 .card-caption {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        color: #565656;
        letter-spacing: 0.025em;
        margin-bottom: 0;
      }

      .content-2-1 .btn-card {
        font: 700 1rem/1.5rem Poppins, sans-serif;
        background-color: #ff7c57;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
        margin-bottom: 1.25rem;
      }

      .content-2-1 .btn-card:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .content-2-1 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        color: #979797;
        border: 1px solid #979797;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
      }

      .content-2-1 .btn-outline:hover {
        border: 1px solid #ff7c57;
        color: #ff7c57;
      }

      .content-2-1 .card-text {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }

      .content-2-1 .grid-padding {
        padding: 0rem 1rem 3rem;
      }

      @media (min-width: 576px) {
        .content-2-1 .grid-padding {
          padding: 0rem 2rem 3rem;
        }

        .content-2-1 .card-block {
          padding: 3rem 2rem 5rem;
        }
      }

      @media (min-width: 768px) {
        .content-2-1 .grid-padding {
          padding: 0rem 4rem 3rem;
        }

        .content-2-1 .card-block {
          padding: 3rem 4rem 5rem;
        }
      }

      @media (min-width: 992px) {
        .content-2-1 .grid-padding {
          padding: 1rem 6rem 3rem;
        }

        .content-2-1 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-1 .column {
          padding: 0rem 2.25rem;
        }
      }

      @media (min-width: 1200px) {
        .content-2-1 .grid-padding {
          padding: 1rem 10rem 3rem;
        }

        .content-2-1 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-1 .card-btn-space {
          margin-top: 15px;
          margin-bottom: 15px;
        }

        .content-2-1 .btn-outline,
        .content-2-1 .btn-card {
          width: 95%;
          float: right;
        }
      }

      @media (max-width: 980px) {
        .content-2-1 .card-btn-space {
          width: 100%;
        }
      }
    </style>
    <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title">Langkah Pemesanan Desain</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
          Buruan, order desain sekarang juga!
        </p>
        <br>
      </div>

      <div class="grid-padding text-center">
        <div class="row">
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="assets/images/buatakun.png" />
            </div>
            <h3 class="icon-title">Membuat Akun</h3>
            <p class="icon-caption">
              Membuat akun agar bisa<br />
              akses fitur keren di BrandQu
            </p>
          </div>
          <br>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="assets/images/Konsultasi.png" />
            </div>
            <h3 class="icon-title">Konsultasi</h3>
            <p class="icon-caption">
              Konsultasikan kebutuhan desain anda melalui fitur chat di website BrandQu.<br />
            </p>
          </div>
          <br>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="assets/images/Konfirmasi.png" />
            </div>
            <h3 class="icon-title">Konfirmasi</h3>
            <p class="icon-caption">
              Konfirmasikan pesanan anda, ikuti persyaratan dari desain yang anda sepakati.
            </p>
            <br>
            <br>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="assets/images/bayar.png" />
            </div>
            <h3 class="icon-title">Bayar & Proses</h3>
            <p class="icon-caption">
              Lakukan pembayaran sesuai kesepakatan, kemudian desain anda akan di proses.
            </p>
          </div>
          <br>
          <br>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="assets/images/kirim.png" />
            </div>
            <h3 class="icon-title">Kirim & Revisi</h3>
            <p class="icon-caption">
              Setelah desain anda kami kirim, anda dapat meminta revisi dengan syarat dan ketentuan.
            </p>
          </div>
          <br>
          <br>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="assets/images/testimoni.png" />
            </div>
            <h3 class="icon-title">Testimoni</h3>
            <p class="icon-caption">
              Setelah transaksi sudah berhasil, anda akan diminta untuk melakukan testimoni
            </p>
          </div>
        </div>
      </div>

      <div class="card-block">
        <div class="card">
          <div class="d-flex flex-lg-row flex-column align-items-center">
            <div class="me-lg-3">
              <img
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                alt="" />
            </div>
            <div class="flex-grow-1 text-lg-start text-center card-text">
              <h3 class="card-title">
                Pengerjaan Desain Cepat Dan Berkualitas
              </h3>
              <p class="card-caption">
                BrandQu adalah sebuah layanan jasa pembuatan desain<br class="d-none d-lg-block" />
                promosi untuk meningkatkan penjualan produk<br>
              </p>
            </div>
            <div class="card-btn-space">
              <button class="btn btn-card text-white">Tentang</button>
              <button class="btn btn-outline">Produk</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!------ testimonial ------>
  <div class="testimonial">
      <div class="text-center title-text">
        <h1 class="text-title">Testimoni Customer</h1>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col-3 wow fadeInLeft">
          <i class="fa fa-quote-left"></i>
          <br><br>
          <p>Design yang dibuat oleh Anila sangat memiliki ciri dan warna tersendiri, kemampuan memadukan illustrasi dan warna menjadikan design lebih hidup.</p>
          <br>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="assets/images/testi1.png"alt="">
          <br>
          <br>
          <h3>Hasnal Wenes</h3>
        </div>
        <div class="col-3 wow fadeIn">
          <i class="fa fa-quote-left"></i>
          <br><br>
          <p>Perpaduan warna yang sesuai serta harga yang sangat terjangkau, pengerjaan desain cepat dan tetap memprioritaskan kualitas yang bagus.</p>
          <br>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="assets/images/testi3.png"alt="">
          <br>
          <br>
          <h3>Lathifah Sukma Putri</h3>
        </div>
        <div class="col-3 wow fadeInRight">
          <i class="fa fa-quote-left"></i>
          <br><br>
          <p>Desainnya menarik, cukup bagus, dan sesuai dengan permintaan. Sederhana tetapi penuh makna. Pelayanannya juga fast response, favorit banget.</p>
          <br>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="assets/images/testi2.png"alt="">
          <br>
          <br>
          <h3>Hilman Singgih Wicaksana</h3>
        </div>
      </div>
    </div>
  </div>
  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FF7C57">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .footer-2-3 .list-space {
        margin-bottom: 1rem;
      }

      .footer-2-3 .footer-text-title {
        font: 600 1.5rem Poppins, sans-serif;
        margin-bottom: 1rem;
      }

      .footer-2-3 .list-menu {
        color: #FFFFFF;
        text-decoration: none !important;
      }

      .footer-2-3 .list-menu:hover {
        color: #9C2707;
      }

      .footer-2-3 hr.hr {
        margin: 0;
        border: 0;
        border-top: 1px solid rgba(46, 46, 90, 1);
      }

      .footer-2-3 .border-color {
        color: #FFFFFF;
      }

      .footer-2-3 .footer-link {
        color: #FFFFFF;
      }

      .footer-2-3 .footer-link:hover {
        color: #ffffff;
      }

      .footer-2-3 .social-media-c:hover circle,
      .footer-2-3 .social-media-p:hover path {
        fill: #ffffff;
      }

      .footer-2-3 .footer-info-space {
        padding-top: 3rem;
      }

      .footer-2-3 .list-footer {
        padding: 5rem 1rem 3rem 1rem;
      }

      .footer-2-3 .info-footer {
        padding: 0 1rem 3rem;
      }

      @media (min-width: 576px) {
        .footer-2-3 .list-footer {
          padding: 5rem 2rem 3rem 2rem;
        }

        .footer-2-3 .info-footer {
          padding: 0 2rem 3rem;
        }
      }

      @media (min-width: 768px) {
        .footer-2-3 .list-footer {
          padding: 5rem 4rem 6rem 4rem;
        }

        .footer-2-3 .info-footer {
          padding: 0 4rem 3rem;
        }
      }

      @media (min-width: 992px) {
        .footer-2-3 .list-footer {
          padding: 5rem 6rem 6rem 6rem;
        }

        .footer-2-3 .info-footer {
          padding: 0 6rem 3rem;
        }
      }
    </style>
    <div class="footer-2-3 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
      <div class="list-footer">
        <div class="row gap-md-0 gap-3">
          <div class="col-lg-3 col-md-6">
            <div class="">
              <div class="list-space">
                <img src="assets/images/logo_footer.png" />
              </div>
              <nav class="list-unstyled">
                <li class="list-space">
                  <a href="" class="list-menu">Home</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">Tentang</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">Produk</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">Keranjang</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">Blog</a>
                </li>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="footer-text-title text-white">Product</h2>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="" class="list-menu">Desain Bisnis</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Desain Pelajar</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Desain Umum</a>
              </li>
            </nav>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="footer-text-title text-white">Company</h2>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="" class="list-menu">Tentang BrandQu</a>
              </li>
              <li class="list-space">
                <a href="" class="list-menu">Blog</a>
              </li>
            </nav>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="footer-text-title text-white">Support</h2>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="" class="list-menu">Help Center</a>
              </li>
            </nav>
          </div>
        </div>
      </div>

      <div class="border-color info-footer">
        <div class="">
          <hr class="hr" />
        </div>
        <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
          <div class="d-flex title-font font-medium align-items-center gap-4">
            <a href="">
              <svg class="social-media-c social-media-left" width="30" height="30" viewBox="0 0 30 30"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#FFFFFF" />
                <g clip-path="url(#clip0)">
                  <path
                    d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667Z"
                    fill="#141432" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a href="">
              <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                  fill="#FFFFFF" />
                <path
                  d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                  fill="#FFFFFF" />
                <path
                  d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511Z"
                  fill="#FFFFFF" />
              </svg>
            </a>
          </div>
          <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
            <a href="" class="footer-link" style="text-decoration: none">Terms of Service</a>
            <span>|</span>
            <a href="" class="footer-link" style="text-decoration: none">Privacy Policy</a>
            <span>|</span>
            <a href="" class="footer-link" style="text-decoration: none">Licenses</a>
          </nav>
          <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
            <p style="margin: 0">Copyright © 2021 Anila Dwi Lestari</p>
          </nav>
        </div>
      </div>
    </div>
    </section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>