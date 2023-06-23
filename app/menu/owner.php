<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Rangkuman Penjualan
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Database
                <i class="right fas fa-diagram"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=data_transaksi" class="nav-link">
                  <i class="far fa-money-bill-alt nav-icon"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=data_produk" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Daftar Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=data_customer" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Daftar Customer</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>