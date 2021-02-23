<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="/css/app.min.css">
  <link rel="stylesheet" href="/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/bundles/sweetalert/sweetalert2.min.css">
  <link rel="stylesheet" href="/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/logo.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <span style="color: slategrey;"> Hello Admin</span> <img alt="image" src="/img/user.png" class="rounded-circle"></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Admin</div>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="/img/logo.png" class="header-logo" /> <span class="logo-name">E-Raport</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="dropdown">
              <a href="/" class="nav-link"><i class="fas fa-tv"></i> <span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="/guru" class="nav-link"><i class="fas fa-user-alt"></i> <span>Data Guru</span></a>
            </li>
            <li class="dropdown">
              <a href="/walas" class="nav-link"><i class="fas fa-server"></i> <span>Data Wali Kelas</span></a>
            </li>
            <li class="dropdown">
              <a href="/siswa" class="nav-link"><i class="fas fa-user-graduate"></i> <span>Data Siswa</span></a>
            </li>
            <li class="dropdown">
              <a href="/kelas" class="nav-link"><i class="fas fa-building"></i> <span>Data Kelas</span></a>
            </li>
            <li class="dropdown">
              <a href="/mapel" class="nav-link"><i class="fas fa-book"></i> <span>Data Mapel</span></a>
            </li>
            <li class="dropdown">
              <a href="/ekskul" class="nav-link"><i class="fas fa-futbol"></i> <span>Data Ekskul</span></a>
            </li>
          </ul>
        </aside>
      </div>

      <?= $this->renderSection('content'); ?>

    </div>
  </div>
  <footer class="main-footer">
    <div class="footer-left" style="text-transform: none; font-size:10pt">
      &copy; Copyright 2021 | Develop By <a target="_blank" href="https://github.com/pratamapujia">PPA</a>
    </div>
  </footer>
  <!-- General JS Scripts -->
  <script src="/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="/bundles/datatables/datatables.min.js"></script>
  <script src="/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="/bundles/jquery-ui/jquery-ui.min.js"></script>
  <script src="/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- <script src="/bundles/cleave-js/dist/cleave.min.js"></script> -->
  <script src="/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- <script src="/bundles/sweetalert/sweetalert.min.js"></script> -->
  <!-- Page Specific JS File -->
  <script src="/bundles/sweetalert/sweetalert2.all.js"></script>
  <script src="/bundles/sweetalert/sweetalert2.min.js"></script>
  <script src="/js/page/index.js"></script>
  <script src="/js/page/datatables.js"></script>
  <!-- <script src="/js/page/forms-advanced-forms.js"></script> -->
  <script src="/js/page/sweetalert.js"></script>
  <!-- Template JS File -->
  <script src="/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="/js/custom.js"></script>
  <script src="/js/jsku.js"></script>


</body>

</html>