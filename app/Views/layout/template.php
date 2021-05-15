<?php $request = \Config\Services::request() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url(); ?>/css/app.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/bundles/sweetalert/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/custom.css">
  <link rel='shortcut icon' href='<?= base_url(); ?>/img/default.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!-- Start Navbar -->
      <?php include 'navbar.php' ?>
      <!-- End Navbar -->

      <!-- Start Sidebar -->
      <?php include 'sidebar.php' ?>
      <!-- End Sidebar -->

      <!-- Start Content -->
      <?= $this->renderSection('content'); ?>
      <!-- End Content -->
    </div>
  </div>

  <!-- Start Footer -->
  <footer class="main-footer">
    <div class="footer-left" style="text-transform: none; font-size:10pt">
      &copy; Copyright <?= date('Y'); ?> | Developed By <a target="_blank" href="https://github.com/pratamapujia">PPA</a>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- General JS Scripts -->
  <script src="<?= base_url(); ?>/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?= base_url(); ?>/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url(); ?>/bundles/datatables/datatables.min.js"></script>
  <script src="<?= base_url(); ?>/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/bundles/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?= base_url(); ?>/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="<?= base_url(); ?>/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="<?= base_url(); ?>/bundles/cleave-js/dist/cleave.min.js"></script>
  <!-- <script src="/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script> -->
  <script src="<?= base_url(); ?>/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- <script src="/bundles/sweetalert/sweetalert.min.js"></script> -->
  <!-- Page Specific JS File -->
  <script src="<?= base_url(); ?>/bundles/sweetalert/sweetalert2.all.js"></script>
  <script src="<?= base_url(); ?>/bundles/sweetalert/sweetalert2.min.js"></script>
  <script src="<?= base_url(); ?>/js/page/index.js"></script>
  <script src="<?= base_url(); ?>/js/page/datatables.js"></script>
  <!-- <script src="/js/page/advance-table.js"></script> -->
  <!-- <script src="/js/page/forms-advanced-forms.js"></script> -->
  <script src="<?= base_url(); ?>/js/page/sweetalert.js"></script>
  <!-- Template JS File -->
  <script src="<?= base_url(); ?>/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url(); ?>/js/custom.js"></script>
  <script src="<?= base_url(); ?>/js/jsku.js"></script>


</body>

</html>