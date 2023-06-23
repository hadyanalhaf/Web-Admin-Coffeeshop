<?php
include('../../conf/config.php');
$idproduk = $_GET["id_produk"];
$kategori_produk = $_GET["kategori_produk"];
$nama_produk = $_GET["nama_produk"];
$deskripsi_produk = $_GET["deskripsi_produk"];
$harga_produk = $_GET["harga_produk"];
$query = mysqli_query($koneksi,"INSERT INTO `product`(`product_id`, `product_category`, `product_name`, `product_description`, `price`) VALUES ('$idproduk','$kategori_produk','$nama_produk','$deskripsi_produk','$harga_produk')");
header('Location: ../index.php?page=data_produk');
?>