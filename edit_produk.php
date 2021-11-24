<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM produk WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='keranjang.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='keranjang.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BrandQu - Layanan Jasa Desain</title>
  <link rel="icon" href="assets/images/logo_BrandQuTop.png"></link>
  <link rel="stylesheet" href="assets/css/transaksi.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- animate Css -->
    <link rel="stylesheet" href="assets/animate.css" />
</head>
<body>
  <div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.html"><img src="assets/images/logo_header.png" width="160px" alt="" class="wow bounceInDown"></a>
    </div>
    <nav>
      <ul id="MenuItems" class="wow bounceInDown">
        <li><a href="home.html">Home</a></li>
        <li><a href="tentang.html">Tentang</a></li>
        <li><a href="produk.html">Produk</a></li>
        <li><a href="keranjang.php">Keranjang</a></li>
        <li><a href="blog.html">Blog</a></li>
      </ul>
    </nav>
  </div>
  </div>

  <br>
  <br>


  <div class="container4">
    <center>
        <h1>Edit Produk <?php echo $data['nama_produk']; ?></h1>
      <center>
        <br>
        <br>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Jenis Produk</label>
         <input type="text" name="jenis_produk" value="<?php echo $data['jenis_produk']; ?>" />
        </div>
        <div>
          <label>Jumlah</label>
         <input type="text" name="jumlah" required=""value="<?php echo $data['jumlah']; ?>" />
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FF7C57">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .footer-2-3 .list-space {
        margin-bottom: 1rem;
      }

      .footer-2-3 .footer-text-title {
        font: 600 1.5rem Poppins, sans-serif, white;
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
        margin-left: 60px;
        color: #FFFFFF;
      }

      .footer-2-3 .footer-link:hover {
        margin-left: 200px;s
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
                  <a href="" class="list-menu">Home</a>
                  <br>
                  <br>
                  <a href="" class="list-menu">Tentang</a>
                  <br>
                  <br>
                  <a href="" class="list-menu">Produk</a>
                  <br>
                  <br>
                  <a href="" class="list-menu">Keranjang</a>
                  <br>
                  <br>
                  <a href="" class="list-menu">Blog</a>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="list-menu">Product</h2>
            <nav class="list-unstyled">
                <a href="" class="list-menu">Desain Bisnis</a>
                <br><br>
                <a href="" class="list-menu">Desain Pelajar</a>
                <br><br>
                <a href="" class="list-menu">Desain Umum</a>
            </nav>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="list-menu">Company</h2>
            <nav class="list-unstyled">
                <a href="" class="list-menu">Tentang BrandQu</a>
                <br><br>
                <a href="" class="list-menu">Blog</a>
            </nav>
          </div>
          <div class="col-lg-3 col-md-6">
            <h2 class="list-menu">Support</h2>
            <nav class="list-unstyled">
                <a href="" class="list-menu">Help Center</a>
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