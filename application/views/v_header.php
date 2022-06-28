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
        <li class="dropdown nav-item">
          <a href="#" class="nav-link" id="notifications-dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-position="bottom-middle-aligned" data-disable-interaction="false">
            <i class="icons notifications-icon"></i>
            <i class="fa fa-circle text-danger"></i>
          </a>
          <ul tabindex="-1" class="dropdown-menu dropdown-menu-messages dropdown-menu-right comments">
            <p class="dropdown-name">Notifications</p>
            <li role="presentation">
              <a role="menuitem" target="_self" href="#" class="dropdown-item">
                <div>
                  <span> Test notifications <span class="fw-bold"> &nbsp;</span> </span>
                </div>
                <div>
                  <span class="dropdown-time">9:15 AM</span>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown nav-item" style="color: white;">
          Selamat datang <?= $this->session->userdata('name') . ' (' . $this->session->userdata('role') . ')' ?> &nbsp;&nbsp;|&nbsp;&nbsp;
        </li>
        <img class="rounded-circle" style="height:30px; width:auto" src="<?= base_url($this->session->userdata('pict')) ?>" alt="...">&nbsp;&nbsp;|&nbsp;&nbsp;
        <li class="dropdown nav-item">
          <a href="<?= site_url('auth/logout') ?>" style="color: white;">
            Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>