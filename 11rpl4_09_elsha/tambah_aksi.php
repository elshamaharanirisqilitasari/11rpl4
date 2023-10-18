<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode = $_POST['Kode Barang'];
$nama = $_POST['Nama Barang'];
$satuan = $_POST['Satuan Barang'];
$stok = $_POST['Stok Barang'];
$harga = $_POST['Harga Barang'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_toko values('','$kode','$nama','$satuan','$stok','$harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>