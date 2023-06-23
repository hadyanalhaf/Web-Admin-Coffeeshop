
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rincian Data Seluruh Customer</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Email Pelanggan</th>
                    <th>Tanggal Bergabung</th>
                    <th>Jenis Kelamin</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM customer");
                    while($penjualan = mysqli_fetch_array($query)){

                    
                    ?>
                  <tr>
                    <td width='10%'> <?php echo $penjualan['customer_id'] ?> </td>
                    <td> <?php echo $penjualan['customer_name'] ?> </td>
                    <td> <?php echo $penjualan['customer_email'] ?> </td>
                    <td> <?php echo $penjualan['customer_since'] ?> </td>
                    <td> <?php echo $penjualan['customer_gender'] ?> </td>
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
  
  