<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM product WHERE product_id = '$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
      <div class="container-fluid">
          <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Mengubah Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='actiondb/update-data.php' enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ID Produk</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Produk" name='id' value="<?php echo $view['product_id'];?>" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kategori Produk</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kategori_produk" >
                            <option value="<?php echo $view['product_category'];?>" selected><?php echo $view['product_category'];?></option>
                            <option value="Coffee">Coffee</option>
                            <option value="Non-Coffee">Non-Coffee</option>
                            <option value="Mixology">Mixology</option>
                            <option value="Snack">Snack</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Produk" name='nama_produk' value="<?php echo $view['product_name'];?>">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Produk" name='id' value="<?php echo $view['product_id'];?>" hidden>
                      </div>
                    
                        <label class="form-label" for="customFile">Ubah Gambar</label>
                        <input type="file" name='foto' class="form-control" id="customFile" />
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <textarea class="form-control" rows="3" placeholder="Masukkan Deskripsi" name='deskripsi_produk'></textarea>
                      </div>
                      <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="text" class="form-control" placeholder="Masukkan Harga Produk" name='harga_produk' value="<?php echo $view['price'];?>">
                      </div>
                    </div>
                    
                  </div>
                <!-- buat nampilin foto -->
                <div class="row">
                <div class="col-sm-12">
                    <img src="foto/<?php echo $view['foto'];?>" width="50%" class="rounded float-right">
                    </div></div>
                    <div class="row">
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
    </section>