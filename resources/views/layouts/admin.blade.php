<html>

<head>
  <title>{{ \Helper::getSetting()->app_name }} - @yield('title')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('themes/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="{{asset('themes/AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('themes/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  {{--
  <link rel="stylesheet" href="{{asset('themes/AdminLTE-3.1.0/plugins/jqvmap/jqvmap.min.css')}}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('themes/AdminLTE-3.1.0/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet"
    href="{{asset('themes/AdminLTE-3.1.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('themes/AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('themes/AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('themes/AdminLTE-3.1.0/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet"
    href="{{asset('themes/AdminLTE-3.1.0/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  @stack('css')

  <!-- include summernote css -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    {{-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('themes/AdminLTE-3.1.0/dist/img/AdminLTELogo.png')}}"
        alt="AdminLTELogo" height="60" width="60">
    </div> --}}

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        {{-- <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li> --}}

        <!-- Messages Dropdown Menu -->
        {{-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li> --}}
        <!-- Notifications Dropdown Menu -->
        {{-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li> --}}

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" aria-expanded="true" href="javascript:void(0)">
            <div class="d-felx badge-pill">
              <span class="fa fa-user"></span>
              <span><b>
                  <?php echo ucwords(auth()->user()->full_name) ?>
                </b></span>
              <span class="fa fa-angle-down"></span>
            </div>
          </a>
          <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
            <a class="dropdown-item" href="{{url('account')}}" id="manage_account"><i class="fa fa-cog"></i> Manage
              Account</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                class="fa fa-power-off"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="javascript:void(0)" role="button" title="Full screen">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li> --}}
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <!-- <img src="{{asset('themes/AdminLTE-3.1.0/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">{{ \Helper::getSetting()->app_name }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img
              src="{{ auth()->user()->photo ? Storage::url(auth()->user()->photo) : 'https://ui-avatars.com/api/?name='.auth()->user()->full_name.'&color=7F9CF5&background=EBF4FF' }}"
              class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->full_name }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{url('/dashboard')}}" class="nav-link {{request()->is('dashboard') ? 'active' : ''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-header">FINANCE</li>
            <li class="nav-item">
              <a href="{{url('/transactions')}}" class="nav-link {{request()->is('transactions*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Transaksi
                </p>
              </a>
            </li>
            <li class="nav-header">LAPORAN</li>
            <li class="nav-item {{request()->is('reports*') ? 'menu-is-opening menu-open' : ''}} ">
              <a href="#" class="nav-link {{request()->is('reports*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="{{request()->is('reports*') ? 'display:block;' : 'display:none;'}}">
                <li class="nav-item">
                  <a href="{{url('/reports/transaksi')}}"
                    class="nav-link {{request()->is('reports/transaksi') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">MASTER DATA</li>
            <li class="nav-item {{request()->is('master-data*') ? 'menu-is-opening menu-open' : ''}} ">
              <a href="#" class="nav-link {{request()->is('master-data*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Master Data
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview"
                style="{{request()->is('master-data*') ? 'display:block;' : 'display:none;'}}">
                <li class="nav-item">
                  <a href="{{url('/master-data/bank')}}"
                    class="nav-link {{request()->is('master-data/bank') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bank</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/master-data/akun-bank')}}"
                    class="nav-link {{request()->is('master-data/akun-bank') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Akun Bank</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/master-data/kategori-pembukuan')}}"
                    class="nav-link {{request()->is('master-data/kategori-pembukuan*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori Pembukuan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/master-data/kategori-pembukuan')}}"
                    class="nav-link {{request()->is('master-data/kategori-pinjaman*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori Pinjaman</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/master-data/users')}}"
                    class="nav-link {{request()->is('master-data/users*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengguna</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">PENGATURAN</li>
            <li class="nav-item {{request()->is('setting*') ? 'menu-is-opening menu-open' : ''}} ">
              <a href="#" class="nav-link {{request()->is('setting*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Pengaturan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview"
                style="{{request()->is('setting*') ? 'display:block;' : 'display:none;'}}">
                <li class="nav-item">
                  <a href="{{url('/setting/general')}}"
                    class="nav-link {{request()->is('setting/general') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Umum</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="javascript::void(0)">HRD Panel Admin</a></strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- include summernote js -->
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  {{-- <script src="{{asset('themes/AdminLTE-3.1.0/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
  <!-- jQuery Knob Chart -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script
    src="{{asset('themes/AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}">
  </script>
  <!-- Summernote -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}">
  </script>
  <!-- AdminLTE App -->
  <script src="{{asset('themes/AdminLTE-3.1.0/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('themes/AdminLTE-3.1.0/dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  {{-- <script src="{{asset('themes/AdminLTE-3.1.0/dist/js/pages/dashboard.js')}}"></script> --}}

  <!-- Sweet Alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Select2 -->
  <script src="{{asset('themes/AdminLTE-3.1.0/plugins/select2/js/select2.full.min.js')}}"></script>
  @stack('js')
</body>

</html>
