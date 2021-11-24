<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $nama_produk   = $_POST['nama_produk'];
  $jenis_produk     = $_POST['jenis_produk'];
  $jumlah    = $_POST['jumlah'];

                    
// jalankan query UPDATE berdasarkan ID yang produknya kita edit
$query  = "UPDATE produk SET nama_produk = '$nama_produk', jenis_produk = '$jenis_produk', jumlah = '$jumlah'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if(!$result){
  die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
//tampil alert dan akan redirect ke halaman index.php
//silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil diubah.');window.location='keranjang.php';</script>";
}

// jalankan query UPDATE berdasarkan ID yang produknya kita edit
$query  = "UPDATE produk SET nama_produk = '$nama_produk', jenis_produk = '$jenis_produk', jumlah = '$jumlah'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if(!$result){
  die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
//tampil alert dan akan redirect ke halaman index.php
//silahkan ganti index.php sesuai halaman yang akan dituju
echo "<script>alert('Data berhasil diubah.');window.location='keranjang.php';</script>";
}