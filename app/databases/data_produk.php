
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rincian Data Seluruh Penjualan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Entry Data Baru
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Produk</th>
                    <th>Kategori Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga Produk</th>
                    <th>Foto Produk</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM product");
                    while($penjualan = mysqli_fetch_array($query)){
                    
                    ?>
                  <tr>
                    <td width='5%'> <?php echo $penjualan['product_id']; ?> </td>
                    <td width='5%'> <?php echo $penjualan['product_category']; ?> </td>
                    <td> <?php echo $penjualan['product_name']; ?> </td>
                    <td width='20%'> <?php echo $penjualan['product_description']; ?> </td>
                    <td width='5%'> <?php echo $penjualan['price']; ?> </td>
                    <td> <?php echo $penjualan['foto']; ?> </td>
                    <td> <a href="index.php?page=edit-data&&id=<?php echo $penjualan['product_id']; ?>" class="btn btn-sm btn-success">Edit</a>
                         <a onclick="hapus_data(<?php echo $penjualan['product_id']; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
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
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="get" action="actiondb/tambah_data.php">
              <div class="modal-body">
                      <div class="form-group">
                        <label for="formGroupExampleInput">ID Produk</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan ID Produk" name="id_produk" required>
                      </div>
                      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori Produk</label>
                          <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kategori_produk" >
                            <option selected>Pilih Kategori</option>
                            <option value="Coffee">Coffee</option>
                            <option value="Non-Coffee">Non-Coffee</option>
                            <option value="Mixology">Mixology</option>
                            <option value="Snack">Snack</option>
                          </select>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Nama Produk</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nama Produk" name="nama_produk" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_produk" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Harga Produk</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Harga Produk" name="harga_produk" required>
                      </div>
            </div>
            
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Entry Data</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <script>
        function hapus_data(data_id){
          // alert('ok');
          //window.location=("actiondb/delete_data.php?id="+data_id)
          Swal.fire({
                title: 'Apakah Yakin Ingin Menghapus Data?',
                // showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: 'Hapus Data',
                confirmButtonColor: '#C82333',
                // denyButtonText: `Don't save`,
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  window.location=("actiondb/delete_data.php?id="+data_id)
                }
              })
        }
      </script>
  
  