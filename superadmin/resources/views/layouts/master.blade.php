<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Super Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/app.css">
  
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper" id="app">
        <!-- Navbar -->      
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="./img/man.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Super Admins</span>
            </a>
            <div class="sidebar">
                
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="./img/woman.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>
            
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <router-link to="/dasboard" class="nav-link">
                        <i class="green nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/profile" class="nav-link">
                        <i class="blue nav-icon fas fa-user"></i>
                        <p>Profile</p>
</router-link>
                    </li>
                    <li class="nav-item">
                        <a href ="#" class="nav-link">
                        <i class="pink nav-icon fas fa-cog"></i>
                        <p>Management<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/users" class="nav-link">
                            <i class="fas fa-users"></i>
                            <p>Users</p>
                            </router-link>
                        </li>
                        </ul>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="red nav-icon fas fa-power-off"></i>
                            <p>Logout</p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </a>

                        

                                    


                    </li>
                </ul>
            </nav>
        </aside>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <router-view></router-view>
        </div>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.0
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>

<script src="/js/app.js"></script>
</body>
</html>
