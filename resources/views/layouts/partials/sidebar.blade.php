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
  </style>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
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
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index3.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="produk" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Produk
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>