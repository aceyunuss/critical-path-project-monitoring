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

<div class="loader-wrap hiding hide">
  <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>