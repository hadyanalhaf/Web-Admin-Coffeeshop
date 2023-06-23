
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rincian Seluruh Penjualan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Waktu Transaksi</th>
                    <th>ID Customer</th>
                    <th>ID Produk</th>
                    <th>Jumlah Barang</th>
                    <th>Pemasukkan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM penjualan");
                    while($penjualan = mysqli_fetch_array($query)){

                    
                    ?>
                  <tr>
                    <td width='10%'> <?php echo $penjualan['transaction_id'] ?> </td>
                    <td> <?php echo $penjualan['transaction_date'] ?> </td>
                    <td> <?php echo $penjualan['transaction_time'] ?> </td>
                    <td> <?php echo $penjualan['customer_id'] ?> </td>
                    <td> <?php echo $penjualan['product_id'] ?> </td>
                    <td> <?php echo $penjualan['quantity'] ?> </td>
                    <td> <?php echo $penjualan['total_spend'] ?> </td>
                  </tr>
                 <?php } ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  
  