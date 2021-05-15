<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-Rapot</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/app.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url(); ?>/img/default.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <?= $this->renderSection('content'); ?>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url(); ?>/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?= base_url(); ?>/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= base_url(); ?>/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?= base_url(); ?>/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="<?= base_url(); ?>/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url(); ?>/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>