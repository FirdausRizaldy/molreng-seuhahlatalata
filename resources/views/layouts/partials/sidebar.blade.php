<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #efa34f">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('assets/image/molreng.png') }}" alt=" AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-bold">Molreng</span>
  </a>
  <style>
    .nav-link.active,
    .nav-link.active p,
    .nav-link.active a,
    .nav-link.active i {
      background-color: #830423 !important;
      color: white;
    }

    .nav-link,
    .nav-link p,
    .nav-link a,
    .nav-link i {
      color: rgb(0, 0, 0);
    }
  </style>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu">
          @if($menu == 'dashboard')
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            @else
        <li class="nav-item menu">
          <a href="#" class="nav-link">
            @endif
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
          </ul>
        </li>
        @if($menu == 'produk')
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            @else
        <li class="nav-item menu">
          <a href="#" class="nav-link">
            @endif
            <i class="nav-icon fas fa-boxes"></i>
            <p>
              Produk
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @if($submenu == 'produk-index')
              <a href="produk" class="nav-link active">
                @else
                <a href="produk" class="nav-link">
                  @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Produk</p>
                </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @if($submenu == 'produk-create')
              <a href="tambahproduk" class="nav-link active">
                @else
                <a href="tambahproduk" class="nav-link">
                  @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Produk</p>
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu">
          @if($menu == 'customer')
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            @else
        <li class="nav-item menu">
          <a href="#" class="nav-link">
            @endif
            <i class="nav-icon fas fa-user-friends"></i>
            <p>
              Customer
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @if($submenu == 'customer-index')
              <a href="customer" class="nav-link active">
                @else
                <a href="customer" class="nav-link">
                  @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Customer</p>
                </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @if($submenu == 'customer-create')
              <a href="tambahcustomer" class="nav-link active">
                @else
                <a href="tambahcustomer" class="nav-link">
                  @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Customer</p>
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu">
          @if($menu == 'pemesanan')
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            @else
        <li class="nav-item menu">
          <a href="#" class="nav-link">
            @endif
            <i class="nav-icon fas fa-warehouse"></i>
            <p>
              Pemesanan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @if($submenu == 'pemesanan-index')
              <a href="pemesanan" class="nav-link active">
                @else
                <a href="pemesanan" class="nav-link">
                  @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Pemesanan</p>
                </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @if($submenu == 'pemesanan-create')
              <a href="tambahpemesanan" class="nav-link active">
                @else
                <a href="tambahpemesanan" class="nav-link">
                  @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemesanan Produk</p>
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu">
          @if($menu == 'penerimaan')
          <a href="penerimaan" class="nav-link active">
            @else
            <a href="penerimaan" class="nav-link">
              @endif
              <i class="nav-icon fas fa-truck-loading"></i>
              <p>
                Penerimaan
              </p>
            </a>
        </li>
        <li class="nav-item menu">
          @if($menu == 'pengiriman')
          <a href="pengiriman" class="nav-link active">
            @else
            <a href="pengiriman" class="nav-link">
              @endif
              <i class="nav-icon fas fa-shipping-fast"></i>
              <p>
                Pengiriman
              </p>
            </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>