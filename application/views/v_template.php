<!DOCTYPE html>
<html>

<head>
  <title>PM Tools - <?= $title ?></title>
  <link href="<?= base_url('assets/css/application.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/owl.theme.green.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/ine-awesome.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/select2.min.css') ?>" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script>
  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36759672-9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-36759672-9');
  </script>


  <!-- common libraries. required for every page-->

  <script src="<?= base_url('assets/js/jquery.min.js') ?> "></script>
  <script src="<?= base_url('assets/js/tables/datatables.js') ?> "></script>

  <script src="<?= base_url('assets/js/jquery.pjax.js') ?> "></script>
  <script src="<?= base_url('assets/js/popper.js') ?> "></script>
  <script src="<?= base_url('assets/js/bootstrap.js') ?> "></script>
  <script src="<?= base_url('assets/js/util.js') ?> "></script>
  <script src="<?= base_url('assets/js/widgster.js') ?> "></script>
  <script src="<?= base_url('assets/js/hammer.js') ?> "></script>
  <script src='<?= base_url('assets/js/jquery.slimscroll.js') ?> '></script>
  <script src="<?= base_url('assets/js/jquery.hammer.js') ?> "></script>
  <script src="<?= base_url('assets/js/select2.min.js') ?> "></script>
  <script src="<?= base_url('assets/js/cpm.js') ?> "></script>

  <!-- common app js -->
  <script src="<?= base_url('assets/js/settings.js') ?> "></script>
  <script src="<?= base_url('assets/js/app.js') ?> "></script>

  <!-- Page scripts -->
  <script src="<?= base_url('assets/js/apexcharts.js') ?> "></script>
  <!-- page specific js -->


</head>

<body>

  <?php

  include('v_header.php');
  include('v_nav.php');
  include('v_content.php');

  ?>

</body>
<script>
  // $(".select2").select2();
  $(".sees").select2({
    theme: "classic"
  });
</script>

</html>