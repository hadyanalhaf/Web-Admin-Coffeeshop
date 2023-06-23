<?php
include('../../conf/config.php');
$idproduk = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM `product` WHERE `product_id`='$idproduk'");
header('Location: ../index.php?page=data_produk');
?>