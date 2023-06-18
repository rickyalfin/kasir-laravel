<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="header">MENU</li>

        <li>
          <a href="{{ route('kategori.index') }}">
            <i class="fa fa-cube"></i> <span>Kategori</span>
          </a>
        </li>

        <li>
          <a href="{{ route('produk.index') }}">
            <i class="fa fa-cubes"></i> <span>Produk</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-id-card"></i> <span>Member</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-truck"></i> <span>Supplier</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-exchange"></i>
            <span>TRANSAKSI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-money"></i> Pengeluaran</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-download"></i> Pembelian</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-upload"></i> Penjualan</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-shopping-cart"></i> Transaksi Lama</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-cart-arrow-down"></i> Transaksi Baru</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-o"></i>
            <span>REPORT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-file-pdf-o"></i> Laporan</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i>
            <span>SYSTEM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-users"></i> User</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-cogs"></i> Pengaturan</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>