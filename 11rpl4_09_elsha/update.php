<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['Id Barang'];
$kode = $_POST['Kode Barang'];
$nama = $_POST['Nama Barang'];
$satuan = $_POST['Satuan Barang'];
$stok = $_POST['Stok Barang'];
$harga = $_POST['Harga Barang'];

// update data ke database
mysqli_query($koneksi,"update tb_toko set ('','$id', '$kode', '$nama', '$satuan', '$stok', '$harga', where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>