<nav id="sidebar" class="sidebar" role="navigation">
  <div class="js-sidebar-content">
    <header class="logo d-md-block">
      <a href="<?= site_url(); ?>">
        <img src="<?= base_url('assets/img/logo.svg') ?>" alt="...">
        <b class="fw-bold"></b> PM Tools</a>
    </header>
    <h5 class="sidebar-nav-title">Menu</h5>
    <ul class="sidebar-nav">
      <li class="">
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
      </li>
      <li class="">
        <a href="<?= site_url('project/laporan') ?>">
          <i class="sidebar-icon settings-icon"></i>
          <span class="icon">Laporan Akhir</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

<script>
  var rl = "<?= $this->session->userdata('role'); ?>";
</script>