<div class="content-wrap">
  <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
  <main id="content" class="content" role="main">
    <!-- Page content -->
    <div class="no-gutters row">
      <div class="col-lg-5">
        <h2 class="page-title fw-semi-bold"><?= $title ?></h2>
      </div>
    </div>

    <?php include($content . '.php') ?>

    <footer class="content-footer hidden-print">
      Flatlogic One Lite - Bootstrap Admin Dashboard Template Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank" class="text-dark">Flatlogic</a>
    </footer>
  </main>
</div>

<div class="loader-wrap hiding hide">
  <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>