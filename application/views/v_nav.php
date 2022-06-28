<nav id="sidebar" class="sidebar" role="navigation">
  <div class="js-sidebar-content">
    <header class="logo d-md-block" style="background-color: #ff0000;">
      <a href="<?= site_url(); ?>">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="..." style="width:60px">
        <b class="fw-bold">MAK</b> Pro</a>
    </header>
    <h5 class="sidebar-nav-title">Menu</h5>
    <ul class="sidebar-nav">
      <!-- <li class="">
        <a href="<?= site_url('user') ?>">
          <i class="sidebar-icon account-icon"></i>
          <span class="icon">User</span>
        </a>
      </li>
      <li class="">
        <a href="<?= site_url('masterproject') ?>">
          <i class="sidebar-icon ui-elements"></i>
          <span class="icon">Proyek</span>
        </a>
      </li>
      <li class="">
        <a href="<?= site_url('project') ?>">
          <i class="sidebar-icon typography-icon"></i>
          <span class="icon">Penentuan Proyek</span>
        </a>
      </li>
      <li class="">
        <a href="<?= site_url('progress') ?>">
          <i class="sidebar-icon tables-icon"></i>
          <span class="icon">Update Progres</span>
        </a>
      </li>
      <li class="">
        <a href="<?= site_url('progress/progresslist') ?>">
          <i class="sidebar-icon dashboard-icon"></i>
          <span class="icon">List Progres</span>
        </a>
      </li> -->
      <li class="">
        <a href="<?= site_url('') ?>">
          <!-- <i class="sidebar-icon settings-icon"></i> -->
          <img src="<?= base_url('assets/ico/beranda.png') ?>" width="30px" >
          <span class="icon">Beranda</span>
        </a>
      </li>
      <li class="">
        <a class="collapsed" href="#ta" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
          <!-- <i class="sidebar-icon ui-elements"></i> -->
          <img src="<?= base_url('assets/ico/data.png') ?>" width="30px" >
          <span class="icon">Data</span>
          <i class="toggle fa fa-angle-down"></i>
        </a>
        <ul id="ta" class="collapse" style="">
          <li class=""><a href="<?= site_url('user') ?>">User</a></li>
          <li class=""> <a href="<?= site_url('project/laporanm') ?>">Laporan Akhir</a></li>
        </ul>
      </li>
      <li class="">
        <a class="collapsed" href="#ap" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
          <!-- <i class="sidebar-icon tables-icon"></i> -->
          <img src="<?= base_url('assets/ico/ap.png') ?>" width="30px" >
          <span class="icon">Active Project</span>
          <i class="toggle fa fa-angle-down"></i>
        </a>
        <ul id="ap" class="collapse" style="">
          <li class=""><a href="<?= site_url('masterproject') ?>">Input Project Baru</a></li>
          <li class=""><a href="<?= site_url('project') ?>">Input Jadwal Project</a></li>
          <li class=""> <a href="<?= site_url('project/jadwal') ?>">Jadwal Project</a></li>
          <li class=""><a href="<?= site_url('progress') ?>">Update Status Project</a></li>
        </ul>
      </li>
      <li class="">
        <a class="collapsed" href="#la" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
          <!-- <i class="sidebar-icon typography-icon"></i> -->
          <img src="<?= base_url('assets/ico/la.png') ?>" width="30px" >
          <span class="icon">Laporan Akhir</span>
          <i class="toggle fa fa-angle-down"></i>
        </a>
        <ul id="la" class="collapse" style="">
          <li class=""><a href="<?= site_url('project/laporan') ?>"><?= $this->session->userdata('role') == "Manajer Proyek" ? "Verifikasi" : "Approve" ?> Laporan Project</a></li>
          <li class=""><a href="<?= site_url('project/cetaklaporan') ?>">Cetak Laporan Akhir Project</a></li>
        </ul>
      </li>
      <li class="">
        <a href="<?= site_url('project/story') ?>">
        <img src="<?= base_url('assets/ico/story.png') ?>" width="30px" >
          <span class="icon">Story Project</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

<script>
  var rl = "<?= $this->session->userdata('role'); ?>";
</script>