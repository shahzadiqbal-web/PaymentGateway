
@include('includes.header');

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                    fill="#7367F0" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                    fill="#161616" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                    fill="#161616" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                    fill="#7367F0" />
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold">APG</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <div class="badge bg-primary rounded-pill ms-auto">5</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="index.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->


          @include('includes.navbar');

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">




                <!-- Source Visit -->
                <div class="col-xl-4 col-md-6 order-2 order-lg-1 mb-4">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="mb-0">Source Visits</h5>
                        <small class="text-muted">38.4k Visitors</small>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="sourceVisits"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-shadow ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Direct Source</h6>
                                <small class="text-muted">Direct link click</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">1.2k</p>
                                <div class="ms-3 badge bg-label-success">+4.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-globe ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Social Network</h6>
                                <small class="text-muted">Social Channels</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">31.5k</p>
                                <div class="ms-3 badge bg-label-success">+8.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-mail ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Email Newsletter</h6>
                                <small class="text-muted">Mail Campaigns</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">893</p>
                                <div class="ms-3 badge bg-label-success">+2.4%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-external-link ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Referrals</h6>
                                <small class="text-muted">Impact Radius Visits</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">342</p>
                                <div class="ms-3 badge bg-label-danger">-0.4%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-discount-2 ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">ADVT</h6>
                                <small class="text-muted">Google ADVT</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">2.15k</p>
                                <div class="ms-3 badge bg-label-success">+9.1%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-2">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-star ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Other</h6>
                                <small class="text-muted">Many Sources</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">12.5k</p>
                                <div class="ms-3 badge bg-label-success">+6.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Source Visit -->

                <!-- Projects table -->
                <div class="col-12 col-xl-8 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
                  <div class="card">
                    <div class="card-datatable table-responsive">
                      <table class="datatables-projects table border-top">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th>Name</th>
                            <th>Leader</th>
                            <th>Team</th>
                            <th class="w-px-200">Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
                <!--/ Projects table -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="fw-medium">Pixinvent</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('includes.footer')
