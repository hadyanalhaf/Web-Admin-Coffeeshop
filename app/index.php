<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include ('header.php'); ?>
<?php include ('../conf/config.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 <?php include('preloader.php') ?>

  <!-- Navbar -->
<?php include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  <?php include('brandlogo.php'); ?>

    <!-- Sidebar -->
    <?php  include('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<?php include('content_header.php') ;?>
    <!-- /.content-header -->

    <!-- Main content  default adalah dashboard -->
    <?php
    if (isset($_GET['page'])){
    if ($_GET['page']=='dashboard'){
      include('dashboard.php');
    }
    else if($_GET['page']=='data_transaksi') {
      include('databases/data_transaksi.php');

    }
    else if($_GET['page']=='data_produk') {
      include('databases/data_produk.php');

    }
    else if($_GET['page']=='data_customer') {
      include('databases/data_customer.php');

    }
    else if($_GET['page']=='edit-data') {
      include('actiondb/edit_data.php');

    }
    else{
      include('notfound.php');
    }
  }else{
    include('dashboard.php');
  }
     ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer.php') ; ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
