<nav id="sidebar" class="sidebar" role="navigation">
  <div class="js-sidebar-content">
    <header class="logo d-md-block">
      <a href="<?= site_url(); ?>">
        <img src="<?= base_url('assets/img/logo.svg') ?>" alt="...">
        <b class="fw-bold"></b> PM Tools</a>
    </header>
    <h5 class="sidebar-nav-title">Master Data</h5>
    <ul class="sidebar-nav">
      <li class=" active ">
        <a href="<?= site_url() ?>">
          <i class="sidebar-icon dashboard-icon"></i>
          <span class="icon">Dashboard</span>
        </a>
      </li>
    </ul>
    <h5 class="sidebar-nav-title">Menu</h5>
    <ul class="sidebar-nav">
      <li class="">
        <a href="typography.html">
          <i class="sidebar-icon typography-icon"></i>
          <span class="icon">Typography</span>
        </a>
      </li>
      <li class="">
        <a href="tables.html">
          <i class="sidebar-icon tables-icon"></i>
          <span class="icon">Tables</span>
        </a>
      </li>
      <li class="">
        <a class="collapsed" href="#sidebar-ui" data-toggle="collapse" data-parent="#sidebar">
          <i class="sidebar-icon ui-elements"></i>
          <span class="icon">UI Elements</span>
          <i class="toggle fa fa-angle-down"></i>
        </a>
        <ul id="sidebar-ui" class="collapse ">
          <li class=""><a href="notifications.html">Notifications</a></li>
          <li class=""><a href="icons.html">Icons</a></li>
          <li class=""><a href="charts.html">Charts</a></li>
          <li class=""><a href="maps_google.html">Google Maps</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>