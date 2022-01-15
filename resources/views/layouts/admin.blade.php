<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Dashboard</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
      @yield('css')
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
         </div>
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="index3.html" class="nav-link">Home</a>
               </li>
              
            </ul>
            <!-- Right navbar links -->
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                  </div>
               </div>
               <!-- SidebarSearch Form -->
               <div class="form-inline">
                  <div class="input-group" data-widget="sidebar-search">
                     <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                     <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                     <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="./index.html" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v1</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('admin.posts.index')}}" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                              Posts
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('admin.sliders.index')}}" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                              Sliders
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('admin.abouts.index')}}" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                              About
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('admin.meals.index')}}" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                              Meals
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('admin.teams.index')}}" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                              Team
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('admin.contact.index')}}" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                              Reservation(Contact)
                           </p>
                        </a>
                     </li>
                     {{-- <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                              Layout Options
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right">6</span>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Collapsed Sidebar</p>
                              </a>
                           </li>
                        </ul>
                     </li> --}}
                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
         <div class="content-wrapper" style="min-height: 1518.4px;">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">

                  @yield('content')

               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
         <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
               <b>Version</b> 3.1.0
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
      <script src="/admin/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="/admin/dist/js/adminlte.js"></script>
      @yield('scripts')
   </body>
</html>

