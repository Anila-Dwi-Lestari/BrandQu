<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama_produk   = $_POST['nama_produk'];
  $jenis_produk     = $_POST['jenis_produk'];
  $jumlah    = $_POST['jumlah'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO produk (nama_produk, jenis_produk, jumlah) VALUES ('$nama_produk', '$jenis_produk', '$jumlah')";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if(!$result){
  die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
//tampil alert dan akan redirect ke halaman index.php
//silahkan ganti index.php sesuai halaman yang akan dituju
echo "<script>alert('Data berhasil ditambah.');window.location='keranjang.php';</script>";
}

$query = "INSERT INTO produk (nama_produk, jenis_produk, jumlah) VALUES ('$nama_produk', '$jenis_produk', '$jumlah', null)";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if(!$result){
  die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
//tampil alert dan akan redirect ke halaman index.php
//silahkan ganti index.php sesuai halaman yang akan dituju
echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}