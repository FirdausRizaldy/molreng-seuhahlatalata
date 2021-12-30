<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <div style="margin: auto"></div>
    </ul>
    <ul  class="navbar-nav ml-auto">
      <div class="header-part-right">
        <!-- Full screen toggle -->
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <!-- Grid menu Dropdown -->

        <!-- User avatar dropdown -->
        <div class="dropdown">
            <div class="user col align-self-end">
                <img  src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2 img-fluid float-right"  style="max-width:25%" id="userDropdown" alt="avatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        {{ auth()->user()->name }}
                    </div>

                    <hr class="dropdown-divider">

                    <a href="{{ url('/user/profile') }}" class="dropdown-item">
                        <i class="fas fa-user-cog mr-1"></i>
                        Profile Setting
                    </a>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf

                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt mr-1"></i>
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </ul>

  </nav>