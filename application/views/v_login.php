<!DOCTYPE html>
<html>

<head>
  <title>Light Blue Bootstrap Dashboard - Login</title>
  <link href="<?= base_url('assets/css/application.min.css') ?>" rel="stylesheet">
  <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
  <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
        <![endif]-->
  <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script>
    /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
        chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
        https://code.google.com/p/chromium/issues/detail?id=332189
        */
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36759672-9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-36759672-9');
  </script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");
    ym(48020168, "init", {
      id: 48020168,
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true,
      trackHash: true,
      ecommerce: "dataLayer"
    });
  </script>
  <!-- /Yandex.Metrika counter -->
</head>

<body class="login-page">
  <div class="container-fluid">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
    <main id="content" class="widget-login-container" role="main">
      <!-- Page content -->
      <div class="row align-item-center">
        <div class="col-xl-3 offset-sm-1 offset-0 col-md-6 col-10 my-auto">
          <section class="widget widget-login bg-transparent animated fadeInUp">
            <header>
              <h2>Login</h2>
            </header>
            <div class="widget-body">
              <p class="widget-login-info">
                Welcome Back! Please login to your account
              </p>
              <form class="login-form mt-lg" action="<?= site_url('auth/login') ?>" method="POST">
                <div role="group" class="form-group">
                  <label for="email" class="d-block">Email</label>
                  <div>
                    <div role="group" class="input-group">
                      <input type="email" name="email" required class="form-control input-transparent pl-3">
                    </div>
                  </div>
                </div>
                <div role="group" class="form-group">
                  <label for="password" class="d-block">Password</label>
                  <div>
                    <div role="group" class="input-group">
                      <input type="password" required name="password" class="form-control input-transparent pl-3">
                    </div>
                  </div>
                </div>
                <?php
                if (!empty($this->session->userdata('err_login_form'))) {
                  $res = $this->session->userdata('err_login_form');
                  $this->session->unset_userdata("err_login_form");
                  echo '<label class="danger text-danger">' . $res . '</label>';
                }
                ?>
                <div class="clearfix">
                  <div class="btn-toolbar">
                    <button type="submit" class="btn btn-warning btn-block">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
        <img src="<?= base_url('assets/img/signin.svg') ?>" class="singin" alt="signin">
      </div>

      <footer class="page-footer">
        &copy; Unsada 2022
      </footer>
    </main>
  </div>
  <!-- The Loader. Is shown when pjax happens -->
  <div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
  </div>

  <!-- common libraries. required for every page-->

  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <!-- <script src="../node_modules/jquery-pjax/jquery.pjax.js"></script>
  <script src='../node_modules/popper.js/dist/umd/popper.js'></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="../node_modules/bootstrap/js/dist/util.js"></script>
  <script src="../node_modules/widgster/widgster.js"></script>
  <script src="../node_modules/hammerjs/hammer.js"></script>
  <script src='../node_modules/jquery-slimscroll/jquery.slimscroll.js'></script>
  <script src="../node_modules/jquery-hammerjs/jquery.hammer.js"></script> -->

  <!-- common app js -->
  <script src="js/settings.js"></script>
  <script src="js/app.js"></script>

  <!-- Page scripts -->
</body>

</html>