<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- META DATA -->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="{{ $author }}" />
    <meta name="keywords" content="Admin {{ $NamaWebsite }}" />

    <!-- FAVICON -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{asset('img/favicon.png')}}"
    />

    <!-- TITLE -->
    <title>Dashboard Admin | @yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link
      id="style"
      href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />

    <!-- STYLE CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/transparent-style.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link
      id="theme"
      rel="stylesheet"
      type="text/css"
      media="all"
      href="{{asset('admin/colors/color1.css')}}"
    />
  </head>

  <body class="app sidebar-mini ltr light-mode">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
      <img src="{{asset('admin/images/loader.svg')}}" class="loader-img" alt="Loader" />
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
      <div class="page-main">
        <!-- app-Header -->
        <div class="app-header header sticky">
          <div class="container-fluid main-container">
            <div class="d-flex">
              <a
                aria-label="Hide Sidebar"
                class="app-sidebar__toggle"
                data-bs-toggle="sidebar"
                href="javascript:void(0)"
              ></a>
              <!-- sidebar-toggle-->
              <a class="logo-horizontal" href="index.html">
                <img
                  src="{{asset('admin/images/brand/logo.png')}}"
                  class="header-brand-img desktop-logo"
                  alt="logo"
                />
                <img
                  src="{{asset('img/logo.png')}}"
                  class="header-brand-img light-logo1"
                  alt="logo"
                />
              </a>
              <!-- LOGO -->
              <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <!-- SEARCH -->
                <button
                  class="navbar-toggler navresponsive-toggler d-lg-none ms-auto"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent-4"
                  aria-controls="navbarSupportedContent-4"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                  <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent-4"
                  >
                    <div class="d-flex order-lg-2">
                      <!-- SEARCH -->
                      {{-- <div class="dropdown d-flex">
                        <a
                          class="nav-link icon theme-layout nav-link-bg layout-setting"
                        >
                          <span class="dark-layout"
                            ><i class="fe fe-moon"></i
                          ></span>
                          <span class="light-layout"
                            ><i class="fe fe-sun"></i
                          ></span>
                        </a>
                      </div>
                      <!-- Theme-Layout -->
                      <div class="dropdown d-flex">
                        <a class="nav-link icon full-screen-link nav-link-bg">
                          <i class="fe fe-minimize fullscreen-button"></i>
                        </a>
                      </div>
                      <!-- FULL-SCREEN -->
                      <div class="dropdown d-flex notifications">
                        <a class="nav-link icon" data-bs-toggle="dropdown"
                          ><i class="fe fe-bell"></i><span class="pulse"></span>
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                        >
                          <div class="drop-heading border-bottom">
                            <div class="d-flex">
                              <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">
                                Notifications
                              </h6>
                            </div>
                          </div>
                          <div class="notifications-menu">
                            <a
                              class="dropdown-item d-flex"
                              href="notify-list.html"
                            >
                              <div
                                class="me-3 notifyimg bg-primary brround box-shadow-primary"
                              >
                                <i class="fe fe-mail"></i>
                              </div>
                              <div class="mt-1 wd-80p">
                                <h5 class="notification-label mb-1">
                                  New Application received
                                </h5>
                                <span class="notification-subtext"
                                  >3 days ago</span
                                >
                              </div>
                            </a>
                            <a
                              class="dropdown-item d-flex"
                              href="notify-list.html"
                            >
                              <div
                                class="me-3 notifyimg bg-secondary brround box-shadow-secondary"
                              >
                                <i class="fe fe-check-circle"></i>
                              </div>
                              <div class="mt-1 wd-80p">
                                <h5 class="notification-label mb-1">
                                  Project has been approved
                                </h5>
                                <span class="notification-subtext"
                                  >2 hours ago</span
                                >
                              </div>
                            </a>
                            <a
                              class="dropdown-item d-flex"
                              href="notify-list.html"
                            >
                              <div
                                class="me-3 notifyimg bg-success brround box-shadow-success"
                              >
                                <i class="fe fe-shopping-cart"></i>
                              </div>
                              <div class="mt-1 wd-80p">
                                <h5 class="notification-label mb-1">
                                  Your Product Delivered
                                </h5>
                                <span class="notification-subtext"
                                  >30 min ago</span
                                >
                              </div>
                            </a>
                            <a
                              class="dropdown-item d-flex"
                              href="notify-list.html"
                            >
                              <div
                                class="me-3 notifyimg bg-pink brround box-shadow-pink"
                              >
                                <i class="fe fe-user-plus"></i>
                              </div>
                              <div class="mt-1 wd-80p">
                                <h5 class="notification-label mb-1">
                                  Friend Requests
                                </h5>
                                <span class="notification-subtext"
                                  >1 day ago</span
                                >
                              </div>
                            </a>
                          </div>
                          <div class="dropdown-divider m-0"></div>
                          <a
                            href="notify-list.html"
                            class="dropdown-item text-center p-3 text-muted"
                            >View all Notification</a
                          >
                        </div>
                      </div>
                      <!-- NOTIFICATIONS -->
                      <div class="dropdown d-flex message">
                        <a
                          class="nav-link icon text-center"
                          data-bs-toggle="dropdown"
                        >
                          <i class="fe fe-message-square"></i
                          ><span class="pulse-danger"></span>
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                        >
                          <div class="drop-heading border-bottom">
                            <div class="d-flex">
                              <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">
                                You have 5 Messages
                              </h6>
                              <div class="ms-auto">
                                <a
                                  href="javascript:void(0)"
                                  class="text-muted p-0 fs-12"
                                  >make all unread</a
                                >
                              </div>
                            </div>
                          </div>
                          <div class="message-menu">
                            <a class="dropdown-item d-flex" href="chat.html">
                              <span
                                class="avatar avatar-md brround me-3 align-self-center cover-image"
                                data-bs-image-src="{{asset('admin/images/users/1.jpg')}}"
                              ></span>
                              <div class="wd-90p">
                                <div class="d-flex">
                                  <h5 class="mb-1">Peter Theil</h5>
                                  <small class="text-muted ms-auto text-end">
                                    6:45 am
                                  </small>
                                </div>
                                <span>Commented on file Guest list....</span>
                              </div>
                            </a>
                            <a class="dropdown-item d-flex" href="chat.html">
                              <span
                                class="avatar avatar-md brround me-3 align-self-center cover-image"
                                data-bs-image-src="{{asset('admin/images/users/15.jpg')}}"
                              ></span>
                              <div class="wd-90p">
                                <div class="d-flex">
                                  <h5 class="mb-1">Abagael Luth</h5>
                                  <small class="text-muted ms-auto text-end">
                                    10:35 am
                                  </small>
                                </div>
                                <span>New Meetup Started......</span>
                              </div>
                            </a>
                            <a class="dropdown-item d-flex" href="chat.html">
                              <span
                                class="avatar avatar-md brround me-3 align-self-center cover-image"
                                data-bs-image-src="{{asset('admin/images/users/12.jpg')}}"
                              ></span>
                              <div class="wd-90p">
                                <div class="d-flex">
                                  <h5 class="mb-1">Brizid Dawson</h5>
                                  <small class="text-muted ms-auto text-end">
                                    2:17 pm
                                  </small>
                                </div>
                                <span>Brizid is in the Warehouse...</span>
                              </div>
                            </a>
                            <a class="dropdown-item d-flex" href="chat.html">
                              <span
                                class="avatar avatar-md brround me-3 align-self-center cover-image"
                                data-bs-image-src="{{asset('admin/images/users/4.jpg')}}"
                              ></span>
                              <div class="wd-90p">
                                <div class="d-flex">
                                  <h5 class="mb-1">Shannon Shaw</h5>
                                  <small class="text-muted ms-auto text-end">
                                    7:55 pm
                                  </small>
                                </div>
                                <span>New Product Realease......</span>
                              </div>
                            </a>
                          </div>
                          <div class="dropdown-divider m-0"></div>
                          <a
                            href="javascript:void(0)"
                            class="dropdown-item text-center p-3 text-muted"
                            >See all Messages</a
                          >
                        </div>
                      </div>
                      <!-- MESSAGE-BOX -->
                      <div class="dropdown d-flex header-settings">
                        <a
                          href="javascript:void(0);"
                          class="nav-link icon"
                          data-bs-toggle="sidebar-right"
                          data-target=".sidebar-right"
                        >
                          <i class="fe fe-align-right"></i>
                        </a>
                      </div> --}}
                      <!-- SIDE-MENU -->
                      <div class="dropdown d-flex profile-1">
                        {{  Auth::user()->name }}
                        <a
                          href="javascript:void(0)"
                          data-bs-toggle="dropdown"
                          class="nav-link leading-none d-flex"
                        >
                          <img
                            src="{{asset('admin/images/users/21.jpg')}}"
                            alt="profile-user"
                            class="avatar profile-user brround cover-image"
                          />
                        </a>
                        <div
                          class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                        >
                          <div class="drop-heading">
                            <div class="text-center">
                              <h5 class="text-dark mb-0 fs-14 fw-semibold">
                                {{  Auth::user()->name }}
                              </h5>
                              <small class="text-muted">Admin</small>
                            </div>
                          </div>
                          <div class="dropdown-divider m-0"></div>
                          {{-- <a class="dropdown-item" href="profile.html">
                            <i class="dropdown-icon fe fe-user"></i> Profile
                          </a>
                          <a class="dropdown-item" href="lockscreen.html">
                            <i class="dropdown-icon fe fe-edit"></i> Change Password
                          </a> --}}
                          <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="dropdown-icon fe fe-alert-circle"></i>
                            Sign out
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        <div class="sticky">
          <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
          <div class="app-sidebar">
            <div class="side-header">
              <a class="header-brand1" href="{{ route('AdminIndex') }}">
                <img
                  src="{{asset('img/logo.png')}}"
                  class="header-brand-img desktop-logo p-5"
                  alt="logo"
                />
                <img
                  src="{{asset('img/favicon.png')}}"
                  class="header-brand-img toggle-logo p-5"
                  alt="logo"
                />
                <img
                  src="{{asset('img/favicon.png')}}"
                  class="header-brand-img light-logo p-5"
                  alt="logo"
                />
                <img
                  src="{{asset('img/logo.png')}}"
                  class="header-brand-img light-logo1 p-5"
                  alt="logo"
                />
              </a>
              <!-- LOGO -->
            </div>
            <div class="main-sidemenu">
              <div class="slide-left disabled" id="slide-left">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="#7b8191"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"
                  />
                </svg>
              </div>
              <ul class="side-menu">
                <li class="sub-category">
                  <h3>Menu</h3>
                </li>
                <li class="slide">
                  <a
                    class="side-menu__item {{ ($page == 'index') ? 'active' : ''}}"
                    data-bs-toggle="slide"
                    href="{{ route('AdminIndex') }}"
                    ><i class="side-menu__icon fe fe-home"></i
                    ><span class="side-menu__label">Dashboard</span></a
                  >
                </li>
                <li class="slide">
                    <a
                      class="side-menu__item {{ ($page == 'portfolio') ? 'active' : ''}}"
                      data-bs-toggle="slide"
                      href="{{ route('AdminPortfolio') }}"
                      ><i class="side-menu__icon fe fe-edit"></i
                      ><span class="side-menu__label">Portfolio</span></a
                    >
                  </li>
              </ul>
              <div class="slide-right" id="slide-right">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="#7b8191"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"
                  />
                </svg>
              </div>
            </div>
          </div>
          <!--/APP-SIDEBAR-->
        </div>

        <!--app-content open-->
        <div class="main-content app-content mt-0">
          <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
              
                @yield('content')

            </div>
            <!-- CONTAINER END -->
          </div>
        </div>
        <!--app-content close-->
      </div>

      <!-- FOOTER -->
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
              Copyright © 2022 <a href="https://decreativeart.com">@yield('title')</a>. Create Website by
              <a href="https://github.com/AgungDwiSahputra"> @yield('author')</a>
            </div>
          </div>
        </div>
      </footer>
      <!-- FOOTER END -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('admin/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('admin/js/sticky.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('admin/js/circle-progress.min.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('admin/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('admin/plugins/sidebar/sidebar.js')}}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('admin/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('admin/plugins/p-scroll/pscroll.js')}}"></script>
    <script src="{{asset('admin/plugins/p-scroll/pscroll-1.js')}}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('admin/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('admin/plugins/chart/rounded-barchart.js')}}"></script>
    <script src="{{asset('admin/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/dataTables.responsive.min.js')}}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('admin/js/apexcharts.js')}}"></script>
    <script src="{{asset('admin/plugins/apexchart/irregular-data-series.js')}}"></script>

    <!-- DATA TABLE JS-->
    <script src="{{asset('admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin/js/table-data.js')}}"></script>

    <!-- C3 CHART JS -->
    <script src="{{asset('admin/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/charts-c3/c3-chart.js')}}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{asset('admin/plugins/input-mask/jquery.mask.min.js')}}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{asset('admin/js/charts.js')}}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('admin/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('admin/plugins/flot/chart.flot.sampledata.js')}}"></script>
    <script src="{{asset('admin/plugins/flot/dashboard.sampledata.js')}}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset('admin/plugins/sidemenu/sidemenu.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('admin/js/index1.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('admin/js/themeColors.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
  </body>
</html>
