<?php $rl = $this->session->userdata('role'); ?>
<nav id="sidebar" class="sidebar" role="navigation">
  <div class="js-sidebar-content">
    <header class="logo d-md-block" style="background-color: #ff0000;">
      <a href="<?= site_url(); ?>">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="..." style="width:60px">
        <b class="fw-bold">MAK</b> Pro</a>
    </header>
    <h5 class="sidebar-nav-title">Menu</h5>
    <ul class="sidebar-nav">
      <li class="">
        <a href="<?= site_url('') ?>">
          <img src="<?= base_url('assets/ico/beranda.png') ?>" width="30px">
          <span class="icon">Beranda</span>
        </a>
      </li>
      <li class="">
        <a class="collapsed" href="#ta" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
          <img src="<?= base_url('assets/ico/data.png') ?>" width="30px">
          <span class="icon">Data</span>
          <i class="toggle fa fa-angle-down"></i>
        </a>
        <ul id="ta" class="collapse" style="">
          <li class=""><a href="<?= site_url('user') ?>">User</a></li>
          <?php if ($rl == "Murid" || $rl == "Pembimbing") { ?>
            <li class="men"> <a href="<?= site_url('project/laporanm') ?>">Laporan Akhir</a></li>
          <?php } ?>
        </ul>
      </li>
      <?php if ($rl != "Kepala Madrasah") { ?>
        <li class="">
          <a class="collapsed" href="#ap" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
            <!-- <i class="sidebar-icon tables-icon"></i> -->
            <img src="<?= base_url('assets/ico/ap.png') ?>" width="30px">
            <span class="icon">Active Project</span>
            <i class="toggle fa fa-angle-down"></i>
          </a>
          <ul id="ap" class="collapse men" style="">
            <?php if ($rl == "Manajer Proyek") { ?>
              <li class="men"><a href="<?= site_url('masterproject') ?>">Input Project Baru</a></li>
            <?php } ?>
            <?php if ($rl == "Pembimbing") { ?>
              <li class="men"><a href="<?= site_url('project') ?>">Input Jadwal Project</a></li>
            <?php } ?>
            <?php if ($rl == "Murid") { ?>
              <li class="men"> <a href="<?= site_url('project/jadwal') ?>">Jadwal Project</a></li>
            <?php } ?>
            <?php if ($rl == "Pembimbing" || $rl == "Murid") { ?>
              <li class="men"><a href="<?= site_url('progress') ?>">Update Status Project</a></li>
            <?php } ?>
          </ul>
        </li>
      <?php } ?>
      <?php if ($rl == "Manajer Proyek" || $rl == "Kepala Madrasah") { ?>
        <li class="">
          <a class="collapsed" href="#la" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
            <!-- <i class="sidebar-icon typography-icon"></i> -->
            <img src="<?= base_url('assets/ico/la.png') ?>" width="30px">
            <span class="icon">Laporan Akhir</span>
            <i class="toggle fa fa-angle-down"></i>
          </a>
          <ul id="la" class="collapse" style="">
            <li class=""><a href="<?= site_url('project/laporan') ?>"><?= $this->session->userdata('role') == "Manajer Proyek" ? "Verifikasi" : "Approve" ?> Laporan Project</a></li>
            <li class=""><a href="<?= site_url('project/cetaklaporan') ?>">Cetak Laporan Akhir Project</a></li>
          </ul>
        </li>
      <?php } ?>
      <?php if ($rl == "Kepala Madrasah") { ?>
        <li class="">
          <a href="<?= site_url('progress/list') ?>">
            <img src="<?= base_url('assets/ico/pro.png') ?>" width="30px">
            <span class="icon">Story Progress</span>
          </a>
        </li>
        <li class="">
          <a href="<?= site_url('project/story') ?>">
            <img src="<?= base_url('assets/ico/story.png') ?>" width="30px">
            <span class="icon">Story Project</span>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>

<script>
  // var rl = "<?= $this->session->userdata('role'); ?>";
  // $('.men').hide();

  // switch (rl) {
  //   case "Kepala Madrasah":
  //     $('.').css({
  //       "display": "block"
  //     });
  //     break;
  //   case "Manajer Proyek":
  //     $('.mp').css({
  //       "display": "block"
  //     });
  //     break;
  //   case "Pembimbing":
  //     $('.pb').css({
  //       "display": "block"
  //     });
  //     break;
  //   case "Murid":
  //     $('.mr').css({
  //       "display": "block"
  //     });
  //     break;
  // }
</script>