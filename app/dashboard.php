<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>                            
                  <?php  
                  $host       = "localhost";
                  $user       = "root";
                  $password   = "";
                  $database   = "braincoffee";
                  $mysqli     = mysqli_connect($host, $user, $password, $database);
                  $sql = "SELECT COUNT(transaction_id) as transaction_id from penjualan";
                  $query = mysqli_query($mysqli,$sql);
                  while($row2=mysqli_fetch_array($query)){
                  echo number_format($row2['transaction_id'],0,".",","). " Pcs";
                  }
                ?>
                </h3>

                <p>Total Penjualan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>Rp.                          
                  <?php  
                  $host       = "localhost";
                  $user       = "root";
                  $password   = "";
                  $database   = "braincoffee";
                  $mysqli     = mysqli_connect($host, $user, $password, $database);
                  $sql = "SELECT SUM(total_spend) as total_spend from penjualan";
                  $query = mysqli_query($mysqli,$sql);
                  while($row2=mysqli_fetch_array($query)){
                  echo number_format($row2['total_spend'],0,".",",");
                  }
                ?>
                </h3>

                <p>Total Pemasukkan</p>
              </div>
              <div class="icon">
                <i class="ion ion-calculator"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>                            
                  <?php  
                  $host       = "localhost";
                  $user       = "root";
                  $password   = "";
                  $database   = "braincoffee";
                  $mysqli     = mysqli_connect($host, $user, $password, $database);
                  $sql = "SELECT COUNT(customer_id) as customer_id from customer";
                  $query = mysqli_query($mysqli,$sql);
                  while($row2=mysqli_fetch_array($query)){
                  echo number_format($row2['customer_id'],0,".",","). " Pelanggan";
                  }
                ?>
                </h3>

                <p>Total Pelanggan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3>                            
              <?php  
                  $host       = "localhost";
                  $user       = "root";
                  $password   = "";
                  $database   = "braincoffee";
                  $mysqli     = mysqli_connect($host, $user, $password, $database);
                  $sql = "SELECT COUNT(product_id) as product_id from product";
                  $query = mysqli_query($mysqli,$sql);
                  while($row2=mysqli_fetch_array($query)){
                  echo number_format($row2['product_id'],0,".",","). " Produk";
                  }
                ?>
                </h3>

                <p>Total Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-coffee"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!--/.direct-chat -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary" hidden>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Pengguna</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Pelanggan</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">User</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>