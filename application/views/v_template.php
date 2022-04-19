<!DOCTYPE html>
<html>

<head>
  <title>Flatlogic One HTML5 Dashboard - Visits</title>
  <link href="<?= base_url('assets/css/application.min.css') ?>" rel="stylesheet">
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

<body class="">
  <!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
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
        <a href="https://flatlogic.com/templates/one-bootstrap-template/demo" target="_blank" class="unlock-button d-none d-md-block">
          <button class="btn btn-outline-warning rounded-0 width-175 mr-3 d-block d-md-none d-lg-block " role="button">
            <span class="fw-semi-bold mr-1">Unlock Full Version </span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          </button>
        </a>
        <form class="navbar-form d-none d-md-block" role="search">
          <div class="form-group">
            <div class="input-group input-group-no-border mr-3">
              <input class="form-control" id="main-search" type="text" placeholder="Search" aria-describedby="search-icon">
              <div class="input-group-append my-auto">
                <img src="<?= base_url('assets/img/icons/search.svg') ?>" id="search-icon" alt="search" width="24px" height="23px" style="margin-left: 12px;">
              </div>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown nav-item">
            <a href="#" class="nav-link" id="notifications-dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-position="bottom-middle-aligned" data-disable-interaction="false">
              <i class="icons notifications-icon"></i>
              <i class="fa fa-circle text-danger"></i>
            </a>
            <ul tabindex="-1" class="dropdown-menu dropdown-menu-messages dropdown-menu-right comments">
              <p class="dropdown-name">Notifications</p>
              <p class="dropdown-date">Today</p>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="avatar thumb-sm mr-3">
                    <img src="<?= base_url('assets/img/avatars/tn1.png') ?>" alt="..." class="rounded-circle pt-1">
                  </span>
                  <div>
                    <span> <span class="fw-bold">Jim Tomson </span> removed you to the project <span class="fw-bold"> Flatlogic One</span> </span>
                  </div>
                  <div>
                    <span class="dropdown-time">9:15 AM</span>
                  </div>
                </a>
              </li>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="avatar thumb-sm mr-3">
                    <img src="<?= base_url('assets/img/avatars/tn2.png') ?>" alt="..." class="rounded-circle pt-1">
                  </span>
                  <div>
                    <span> <span class="fw-bold">Elena Bureeva </span> invited you to the project <span class="fw-bold">Flatlogic One</span> </span>
                  </div>
                  <div>
                    <span class="dropdown-time">9:15 AM</span>
                  </div>
                </a>
              </li>
              <p class="dropdown-date">Yesterday</p>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="avatar thumb-sm mr-3">
                    <img src="<?= base_url('assets/img/avatars/tn1.png') ?>" alt="..." class="rounded-circle pt-1">
                  </span>
                  <div>
                    <span> <span class="fw-bold">Jim Tomson </span> removed you to the project <span class="fw-bold"> Flatlogic One</span> </span>
                  </div>
                  <div>
                    <span class="dropdown-time">9:15 AM</span>
                  </div>
                </a>
              </li>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="avatar thumb-sm mr-3">
                    <img src="<?= base_url('assets/img/avatars/tn3.png') ?>" alt="..." class="rounded-circle pt-1">
                  </span>
                  <div>
                    <span> <span class="fw-bold">Elena Bureeva </span> invited you to the project <span class="fw-bold">Flatlogic One</span> </span>
                  </div>
                  <div>
                    <span class="dropdown-time">9:15 AM</span>
                  </div>
                </a>
              </li>
              <li role="presentation">
                <button role="menuitem" type="button" class="dropdown-item">
                  <span class="ml-auto text-warning">See more
                    <i class="fa fa-arrow-right ml-1"></i>
                  </span>
                </button>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="nav-link" id="notifications-dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-position="bottom-middle-aligned" data-disable-interaction="false">
              <i class="icons email-icon"></i>
              <i class="fa fa-circle text-success"></i>
            </a>
            <ul tabindex="-1" class="dropdown-menu dropdown-menu-messages dropdown-menu-right comments">
              <p class="dropdown-name">New Messages</p>
              <p class="dropdown-date text-warning mt-n2">5 new messages</p>
              <p class="dropdown-date">Today</p>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="avatar thumb-sm mr-3">
                    <img src="<?= base_url('assets/img/avatars/tn1.png') ?>" alt="..." class="rounded-circle">
                    <span class="dropdown-time">9:15 AM</span>
                  </span>
                  <div>
                    <span class="fw-bold">Jim Tomson </span><br> Hey! How is it going?
                  </div>
                  <div class="ml-auto">
                    <span class="badge badge-secondary badge-pill">2</span>
                  </div>
                </a>
              </li>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="avatar thumb-sm mr-3">
                    <img src="<?= base_url('assets/img/avatars/tn2.png') ?>" alt="..." class="rounded-circle">
                    <span class="dropdown-time">9:15 AM</span>
                  </span>
                  <div>
                    <span class="fw-bold">Elena Bureeva </span><br> Good news!
                  </div>
                  <div class="ml-auto">
                    <span class="badge badge-secondary badge-pill">1</span>
                  </div>
                </a>
              </li>
              <p class="dropdown-date">Yesterday</p>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="avatar thumb-sm mr-3">
                    <img src="<?= base_url('assets/img/avatars/tn1.png') ?>" alt="..." class="rounded-circle">
                    <span class="dropdown-time">9:15 AM</span>
                  </span>
                  <div>
                    <span class="fw-bold">Jim Tomson </span><br> Nice to see you again!
                  </div>
                  <div class="ml-auto">
                    <span class="badge badge-secondary badge-pill">1</span>
                  </div>
                </a>
              </li>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="avatar thumb-sm mr-3">
                    <img src="<?= base_url('assets/img/avatars/tn3.png') ?>" alt="..." class="rounded-circle">
                    <span class="dropdown-time">9:15 AM</span>
                  </span>
                  <div>
                    <span class="fw-bold">Jim Tomson </span><br> Nice to see you again!
                  </div>
                  <div class="ml-auto">
                    <span class="badge badge-secondary badge-pill">1</span>
                  </div>
                </a>
              </li>
              <button role="menuitem" type="button" class="dropdown-item">
                <span class="ml-auto text-warning">See more
                  <i class="fa fa-arrow-right ml-1"></i>
                </span>
              </button>
            </ul>
          </li>
          <li class="dropdown nav-item">
            <a href="#" role="button" class="dropdown-toggle dropdown-toggle-notifications nav-link profile" id="notifications-dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-position="bottom-middle-aligned" data-disable-interaction="false">
              <span class="avatar float-left">
                <img class="rounded-circle" src="<?= base_url('assets/img/avatars/a7.png') ?>" alt="...">
              </span>
            </a>
            <ul tabindex="-1" class="dropdown-menu dropdown-menu-messages dropdown-menu-right comments profile">
              <p class="dropdown-name">Sara Smith</p>
              <p class="dropdown-date text-warning mt-n2">Sara_smith@gmail.com</p>

              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="mr-3">
                    <img src="<?= base_url('assets/img/icons/settings_outlined.svg') ?>" alt="...">
                  </span>
                  <div>
                    <span>Settings </span>
                  </div>
                </a>
              </li>
              <li role="presentation">
                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                  <span class="mr-3">
                    <img src="<?= base_url('assets/img/icons/profile_outlined.svg') ?>" alt="...">
                  </span>
                  <div>
                    <span>Account </span>
                  </div>
                </a>
              </li>
              <li role="presentation">
                <a role="menuitem" target="_self" href="login.html" class="dropdown-item">
                  <span class="mr-3">
                    <img src="<?= base_url('assets/img/icons/logout_outlined.svg') ?>" alt="...">
                  </span>
                  <div>
                    <span>Log out </span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <nav id="sidebar" class="sidebar" role="navigation">
    <!-- need this .js class to initiate slimscroll -->
    <div class="js-sidebar-content">
      <header class="logo d-md-block">
        <a href="index.html">
          <img src="<?= base_url('assets/img/logo.svg') ?>" alt="...">
          <b class="fw-bold">Flatlogic</b> One</a>
      </header>
      <h5 class="sidebar-nav-title">App</h5>
      <ul class="sidebar-nav">
        <li class=" active ">
          <a href="index.html">
            <i class="sidebar-icon dashboard-icon"></i>
            <span class="icon">Dashboard</span>
          </a>
        </li>
      </ul>
      <h5 class="sidebar-nav-title">Template </h5>
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
      <ul class="sidebar-nav">
        <hr>
        <li class="">
          <a href="#">
            <i class="sidebar-icon settings-icon"></i>
            <span class="icon">Settings</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="sidebar-icon account-icon"></i>
            <span class="icon">Account</span>
          </a>
        </li>
        <li class="">
          <a href="login.html" target="_blank" data-no-pjax>
            <i class="sidebar-icon logout-icon"></i>
            <span class="icon">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
    <main id="content" class="content" role="main">
      <!-- Page content -->
      <div class="no-gutters row">
        <div class="col-lg-5">
          <h1 class="page-title">App > <span class="fw-semi-bold">Dashboard</span></h1>
        </div>
        <div class="d-flex align-items-start justify-content-center pr-0 dashboard-buttons mt-1 col-lg-7">
          <div class="ml-lg-auto ml-md-0 mr-lg-4 btn-group dropdown">
            <button class="btn btn-default bg-white dropdown-toggle custom-dropdown" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              15 Jan 2020
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
              <button class="dropdown-item" type="button">14 Jan 2020</button>
              <button class="dropdown-item" type="button">13 Jan 2020</button>
              <button class="dropdown-item" type="button">12 Jan 2020</button>
            </div>
          </div>
          <button class="btn btn-danger">Download Report</button>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4">
          <section class="widget pb-0">
            <header>
              <h5>
                <span class="fw-semi-bold">Average Order Value</span>
              </h5>
              <div class="widget-controls">
                <div class="dropdown">
                  <span data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                    <img src="<?= base_url('assets/img/icons/dots.svg') ?>" alt="dropdown">
                  </span>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="bg-widget-transparent dropdown-menu dropdown-menu-right" style="padding: 10px;">
                    <button type="button" title="Reload" tabindex="0" role="menuitem" class="dropdown-item">Reload &nbsp;&nbsp;
                      <span class="badge badge-pill badge-success animated bounceIn">
                        <strong>9</strong>
                      </span>
                    </button>
                    <button type="button" title="Full Screen" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen</button>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <button type="button" title="Close" tabindex="0" role="menuitem" class="dropdown-item" data-widgster="close">Close</button>
                  </div>
                </div>
              </div>
            </header>
            <div class="widget-body">
              <div class="justify-content-between mt-3 no-gutters row">
                <div class="d-flex align-items-center col-sm-8">
                  <h3 class="fw-semi-bold mb-0">872 410 $</h3>
                </div>
                <div class="d-flex align-items-center justify-content-end col-sm-4">
                  <img src="<?= base_url('assets/img/icons/stocks.svg') ?>" alt="" class="mr-1">
                  <p class="text-success mb-0">40%</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="apexcharts">
                    <div id="first-apex-chart"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-xl-4">
          <section class="widget pb-0">
            <header>
              <h5>
                <span class="fw-semi-bold">Convertion Rate</span>
              </h5>
              <div class="widget-controls">
                <div class="dropdown">
                  <span data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                    <img src="<?= base_url('assets/img/icons/dots.svg') ?>" alt="dropdown">
                  </span>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="bg-widget-transparent dropdown-menu dropdown-menu-right" style="padding: 10px;">
                    <button type="button" title="Reload" tabindex="0" role="menuitem" class="dropdown-item">Reload &nbsp;&nbsp;
                      <span class="badge badge-pill badge-success animated bounceIn">
                        <strong>9</strong>
                      </span>
                    </button>
                    <button type="button" title="Full Screen" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen</button>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <button type="button" title="Close" tabindex="0" role="menuitem" class="dropdown-item" data-widgster="close">Close</button>
                  </div>
                </div>
              </div>
            </header>
            <div class="widget-body">
              <div class="justify-content-between mt-3 no-gutters row">
                <div class="d-flex align-items-center col-sm-8">
                  <h3 class="fw-semi-bold mb-0">20.7%</h3>
                </div>
                <div class="d-flex align-items-center justify-content-end col-sm-4">
                  <img src="<?= base_url('assets/img/icons/stocks.svg') ?>" alt="" class="mr-1">
                  <p class="text-success mb-0">15%</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="apexcharts" style="min-height: 95px;">
                    <div id="second-apex-chart"></div>

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-xl-2 col-sm-6">
          <section class="widget">
            <div class="widget-body">
              <div class="justify-content-center align-items-center row">
                <div class="d-flex justify-content-center align-items-center mb-2 col-sm-12">
                  <img src="<?= base_url('assets/img/icons/usersImg.svg') ?>" alt="" style="padding-top: 15px;">
                </div>
                <div class="d-flex justify-content-center align-items-center col-sm-12">
                  <h3 class="fw-semi-bold pt-1 mb-0">50873</h3>
                </div>
                <div class="d-flex justify-content-center align-items-center col-sm-12">
                  <h5 class="fw-thin pt-1 mb-0">Visitors</h5>
                </div>
                <div class="d-flex justify-content-center align-items-center pt-1 col-sm-12">
                  <img src="<?= base_url('assets/img/icons/stocks.svg') ?>" alt="" class="mr-1">
                  <p class="fw-thin text-success mb-0">15%</p>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-xl-2 col-sm-6">
          <section class="widget">
            <div class="widget-body">
              <div class="justify-content-center align-items-center row">
                <div class="d-flex justify-content-center align-items-center mb-2 col-sm-12">
                  <img src="<?= base_url('assets/img/icons/smileImg.svg') ?>" alt="" style="padding-top: 15px;">
                </div>
                <div class="d-flex justify-content-center align-items-center col-sm-12">
                  <h3 class="fw-semi-bold pt-1 mb-0">6452</h3>
                </div>
                <div class="d-flex justify-content-center align-items-center col-sm-12">
                  <h5 class="fw-thin pt-1 mb-0">Customers</h5>
                </div>
                <div class="d-flex justify-content-center align-items-center pt-1 col-sm-12">
                  <img src="<?= base_url('assets/img/icons/stocks.svg') ?>" alt="" class="mr-1">
                  <p class="fw-thin text-success mb-0">19%</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4">
          <section class="widget pb-0">
            <header>
              <h5>
                <span class="fw-semi-bold">Upsell Take Rate</span>
              </h5>
              <div class="widget-controls">
                <div class="dropdown">
                  <span data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                    <img src="<?= base_url('assets/img/icons/dots.svg') ?>" alt="dropdown">
                  </span>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="bg-widget-transparent dropdown-menu dropdown-menu-right" style="padding: 10px;">
                    <button type="button" title="Reload" tabindex="0" role="menuitem" class="dropdown-item">Reload &nbsp;&nbsp;
                      <span class="badge badge-pill badge-success animated bounceIn">
                        <strong>9</strong>
                      </span>
                    </button>
                    <button type="button" title="Full Screen" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen</button>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <button type="button" title="Close" tabindex="0" role="menuitem" class="dropdown-item" data-widgster="close">Close</button>
                  </div>
                </div>
              </div>
            </header>
            <div class="widget-body">
              <div class="justify-content-between mt-3 no-gutters row">
                <div class="d-flex align-items-center col-sm-8">
                  <h3 class="fw-semi-bold mb-0">20.7%</h3>
                </div>
                <div class="d-flex align-items-center justify-content-end col-sm-4">
                  <img src="<?= base_url('assets/img/icons/stocks.svg') ?>" alt="" class="mr-1">
                  <p class="text-success mb-0">20%</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="apexcharts" style="min-height: 95px;">
                    <div id="third-apex-chard"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-xl-4">
          <section class="widget pb-0">
            <header>
              <h5>
                <span class="fw-semi-bold">Number of returns</span>
              </h5>
              <div class="widget-controls">
                <div class="dropdown">
                  <span data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                    <img src="<?= base_url('assets/img/icons/dots.svg') ?>" alt="dropdown">
                  </span>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="bg-widget-transparent dropdown-menu dropdown-menu-right" style="padding: 10px;">
                    <button type="button" title="Reload" tabindex="0" role="menuitem" class="dropdown-item">Reload &nbsp;&nbsp;
                      <span class="badge badge-pill badge-success animated bounceIn">
                        <strong>9</strong>
                      </span>
                    </button>
                    <button type="button" title="Full Screen" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen</button>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <button type="button" title="Close" tabindex="0" role="menuitem" class="dropdown-item" data-widgster="close">Close</button>
                  </div>
                </div>
              </div>
            </header>
            <div class="widget-body">
              <div class="justify-content-between mt-3 no-gutters row">
                <div class="d-flex align-items-center col-sm-8">
                  <h3 class="fw-semi-bold mb-0">12</h3>
                </div>
                <div class="d-flex align-items-center justify-content-end col-sm-4">
                  <img src="<?= base_url('assets/img/icons/stocks.svg') ?>" alt="" class="mr-1">
                  <p class="text-success mb-0">14%</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="apexcharts" style="min-height: 95px;">
                    <div id="fourth-apex-chart"></div>

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-xl-2 col-sm-6">
          <section class="widget">
            <div class="widget-body">
              <div class="justify-content-center align-items-center row">
                <div class="d-flex justify-content-center align-items-center mb-2 col-sm-12">
                  <img src="<?= base_url('assets/img/icons/total-sale.svg') ?>" alt="" style="padding-top: 15px;">
                </div>
                <div class="d-flex justify-content-center align-items-center col-sm-12">
                  <h3 class="fw-semi-bold pt-1 mb-0">$92k</h3>
                </div>
                <div class="d-flex justify-content-center align-items-center col-sm-12">
                  <h5 class="fw-thin pt-1 mb-0">Sales</h5>
                </div>
                <div class="d-flex justify-content-center align-items-center pt-1 col-sm-12">
                  <img src="<?= base_url('assets/img/icons/stocks.svg') ?>" alt="" class="mr-1">
                  <p class="fw-thin text-success mb-0">13%</p>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-xl-2 col-sm-6">
          <section class="widget">
            <div class="widget-body">
              <div class="justify-content-center align-items-center row">
                <div class="d-flex justify-content-center align-items-center mb-2 col-sm-12">
                  <img src="<?= base_url('assets/img/icons/orders.svg') ?>" alt="" style="padding-top: 15px;">
                </div>
                <div class="d-flex justify-content-center align-items-center col-sm-12">
                  <h3 class="fw-semi-bold pt-1 mb-0">3240</h3>
                </div>
                <div class="d-flex justify-content-center align-items-center col-sm-12">
                  <h5 class="fw-thin pt-1 mb-0">Orders</h5>
                </div>
                <div class="d-flex justify-content-center align-items-center pt-1 col-sm-12">
                  <img src="<?= base_url('assets/img/icons/stocksDown.svg') ?>" alt="" class="mr-1">
                  <p class="fw-thin text-danger mb-0">8%</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8">
          <section class="widget pb-0">
            <header>
              <h5>
                <span class="fw-semi-bold">Daily Line Chart</span>
              </h5>
              <div class="widget-controls">
                <div class="dropdown">
                  <span data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                    <img src="<?= base_url('assets/img/icons/dots.svg') ?>" alt="dropdown">
                  </span>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="bg-widget-transparent dropdown-menu dropdown-menu-right" style="padding: 10px;">
                    <button type="button" title="Reload" tabindex="0" role="menuitem" class="dropdown-item">Reload &nbsp;&nbsp;
                      <span class="badge badge-pill badge-success animated bounceIn">
                        <strong>9</strong>
                      </span>
                    </button>
                    <button type="button" title="Full Screen" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen</button>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <button type="button" title="Close" tabindex="0" role="menuitem" class="dropdown-item" data-widgster="close">Close</button>
                  </div>
                </div>
              </div>
            </header>
            <div class="widget-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="apexcharts" style="min-height: 95px;">
                    <div id="fifth-apex-chart"></div>

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-xl-4">
          <section class="widget">
            <header>
              <h5>
                <span class="fw-semi-bold">Status</span>
              </h5>
              <div class="widget-controls">
                <div class="dropdown">
                  <span data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                    <img src="<?= base_url('assets/img/icons/dots.svg') ?>" alt="dropdown">
                  </span>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="bg-widget-transparent dropdown-menu dropdown-menu-right" style="padding: 10px;">
                    <button type="button" title="Reload" tabindex="0" role="menuitem" class="dropdown-item">Reload &nbsp;&nbsp;
                      <span class="badge badge-pill badge-success animated bounceIn">
                        <strong>9</strong>
                      </span>
                    </button>
                    <button type="button" title="Full Screen" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen</button>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <button type="button" title="Close" tabindex="0" role="menuitem" class="dropdown-item" data-widgster="close">Close</button>
                  </div>
                </div>
              </div>
            </header>
            <div class="widget-body">
              <div class="row mb-4">
                <div class="col-12" style="min-height: 95px;">
                  <div id="sixth-apex-chard"></div>
                </div>
              </div>
              <div class="justify-content-between row">
                <div class="col-sm-4">
                  <div class="pie-elements danger">
                    <h4 class="mt-3 mb-1">253</h4>
                    <p>Booked</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="pie-elements warning">
                    <h4 class="mt-3 mb-1">1732</h4>
                    <p>On progress</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="pie-elements black">
                    <h4 class="mt-3 mb-1">154</h4>
                    <p>Canceled</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="widget">
            <header>
              <h5>
                <span class="fw-semi-bold">Recent Order</span>
              </h5>
              <div class="widget-controls">
                <div class="dropdown">
                  <span data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                    <img src="<?= base_url('assets/img/icons/dots.svg') ?>" alt="dropdown">
                  </span>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="bg-widget-transparent dropdown-menu dropdown-menu-right" style="padding: 10px;">
                    <button type="button" title="Reload" tabindex="0" role="menuitem" class="dropdown-item">Reload &nbsp;&nbsp;
                      <span class="badge badge-pill badge-success animated bounceIn">
                        <strong>9</strong>
                      </span>
                    </button>
                    <button type="button" title="Full Screen" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen</button>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <button type="button" title="Close" tabindex="0" role="menuitem" class="dropdown-item" data-widgster="close">Close</button>
                  </div>
                </div>
              </div>
            </header>
            <div class="widget-body">
              <div class="table-responsive">
                <table class="mb-0 table dashboard-table">
                  <thead>
                    <tr>
                      <th scope="col" class="pl-0">Invoices</th>
                      <th scope="col" class="pl-0">Customers</th>
                      <th scope="col" class="pl-0">Date</th>
                      <th scope="col" class="pl-0">Amount</th>
                      <th scope="col" class="pl-0">Status</th>
                      <th scope="col" class="pl-0">Tracking</th>
                    </tr>
                  </thead>
                  <tbody class="text-dark">
                    <tr>
                      <td class="fw-thin pl-0 fw-thin">
                        <i class="fa fa-circle text-success mr-3">
                        </i>#003486
                      </td>
                      <td class="pl-0 fw-thin">
                        <img src="<?= base_url('assets/img/avatars/tn1.png') ?>" alt="" class="mr-3" width="34px" height="34px">Kate
                        Claus
                      </td>
                      <td class="pl-0 fw-thin">10 Jan 2020</td>
                      <td class="pl-0 fw-normal">$8400</td>
                      <td class="pl-0 text-success fw-normal">On Delivery</td>
                      <td class="pl-0 fw-thin">RU00250TF</td>
                    </tr>
                    <tr>
                      <td class="fw-normal pl-0 fw-thin">
                        <i class="fa fa-circle text-success mr-3">
                        </i>#004326
                      </td>
                      <td class="pl-0 fw-thin">
                        <img src="<?= base_url('assets/img/avatars/tn2.png') ?>" alt="" class="mr-3" width="34px" height="34px">Maria
                        Gordon
                      </td>
                      <td class="pl-0 fw-thin">08 Jan 2020</td>
                      <td class="pl-0 fw-normal">$8400</td>
                      <td class="pl-0 text-success fw-normal">On Delivery</td>
                      <td class="pl-0 fw-thin">RU00250TF</td>
                    </tr>
                    <tr>
                      <td class="fw-normal pl-0 fw-thin">
                        <i class="fa fa-circle text-danger mr-3"></i>#001258
                      </td>
                      <td class="pl-0 fw-thin">
                        <img src="<?= base_url('assets/img/avatars/tn3.png') ?>" alt="" class="mr-3" width="34px" height="34px">Nick
                        Peru
                      </td>
                      <td class="pl-0 fw-thin">05 Jan 2020</td>
                      <td class="pl-0 fw-normal">$1300</td>
                      <td class="pl-0 text-danger fw-normal">Pending</td>
                      <td class="pl-0 fw-thin">RU00250TF</td>
                    </tr>
                    <tr>
                      <td class="fw-normal pl-0 fw-thin">
                        <i class="fa fa-circle text-danger mr-3"></i>#0014176
                      </td>
                      <td class="pl-0 fw-thin">
                        <img src="<?= base_url('assets/img/avatars/a7.png') ?>" alt="" class="mr-3" width="34px" height="34px">Lian
                        Robinson
                      </td>
                      <td class="pl-0 fw-thin">20 Dec 2019</td>
                      <td class="pl-0 fw-normal">$880</td>
                      <td class="pl-0 text-danger fw-normal">Pending</td>
                      <td class="pl-0 fw-thin">RU00250TF</td>
                    </tr>
                    <tr>
                      <td class="fw-normal pl-0 fw-thin">
                        <i class="fa fa-circle text-danger mr-3"></i>#0014177
                      </td>
                      <td class="pl-0 fw-thin">
                        <img src="<?= base_url('assets/img/avatars/tn5.png') ?>" alt="" class="mr-3" width="34px" height="34px">Sam
                        Fisher
                      </td>
                      <td class="pl-0 fw-thin">16 Dec 2019</td>
                      <td class="pl-0 fw-normal">$9400</td>
                      <td class="pl-0 text-danger fw-normal">Pending</td>
                      <td class="pl-0 fw-thin">RU00250TF</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>

      <footer class="content-footer hidden-print">
        Flatlogic One Lite - Bootstrap Admin Dashboard Template Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank" class="text-dark">Flatlogic</a>
      </footer>
    </main>
  </div>
  <!-- The Loader. Is shown when pjax happens -->
  <div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
  </div>

  <!-- common libraries. required for every page-->

  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/jquery-pjax/jquery.pjax.js"></script>
  <script src='../node_modules/popper.js/dist/umd/popper.js'></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="../node_modules/bootstrap/js/dist/util.js"></script>
  <script src="../node_modules/widgster/widgster.js"></script>
  <script src="../node_modules/hammerjs/hammer.js"></script>
  <script src='../node_modules/jquery-slimscroll/jquery.slimscroll.js'></script>
  <script src="../node_modules/jquery-hammerjs/jquery.hammer.js"></script>

  <!-- common app js -->
  <script src="js/settings.js"></script>
  <script src="js/app.js"></script>

  <!-- Page scripts -->
  <script src='../node_modules/apexcharts/dist/apexcharts.js'></script>
  <!-- page specific js -->
  <script src="js/dashboard/index.js"></script>
</body>

</html>