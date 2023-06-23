<?php
include('../../conf/config.php');
$idproduk = $_POST["id"];
$kategori_produk = $_POST["kategori_produk"];
$nama_produk = $_POST["nama_produk"];
$deskripsi_produk = $_POST["deskripsi_produk"];
$harga_produk = $_POST["harga_produk"];

//foto
$nama_file = $_FILES['foto']['name'];
// echo $nama_file;
//lokasi foto
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../foto/'.$nama_file);


$query = mysqli_query($koneksi,"UPDATE product SET product_category='$kategori_produk',product_name='$nama_produk',product_description='$deskripsi_produk',price='$harga_produk',foto='$nama_file' WHERE product_id='$idproduk'");
header('Location: ../index.php?page=data_produk');
?>