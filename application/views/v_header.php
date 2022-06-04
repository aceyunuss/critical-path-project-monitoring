<nav class="page-controls navbar navbar-dashboard">
  <div class="container-fluid">
    <div class="navbar-header mobile-hidden">
      <ul class="nav navbar-nav toggle-sidebar">
        <li class="d-md-none d-flex nav-item">
          <a id="toggleSidebar" class="nav-link">
            <i class="la la-bars"></i>
          </a>
        </li>
      </ul>

      <ul class="nav navbar-nav float-right">
        <li class="dropdown nav-item" style="color: white;">
          <?= $this->session->userdata('name') . ' (' . $this->session->userdata('role') . ')' ?> &nbsp;&nbsp;|&nbsp;&nbsp;
        </li>
        <li class="dropdown nav-item">
          <a href="<?= site_url('auth/logout') ?>" style="color: white;">
            Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>