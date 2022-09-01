<!DOCTYPE html>
<html class="no-js css-menubar" lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    {{-- <title>{{config('app.name')}}</title> --}}
    <title>@yield('title') - {{ config('app.name') }} </title>
    @livewireStyles
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">
    <!-- Plugins -->
    {{-- <link rel="stylesheet" href="{{asset('assets/global/vendor/animsition/animsition.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/global/vendor/asscrollable/asScrollable.css')}}">
   <link rel="stylesheet" href="{{asset('assets/global/vendor/switchery/switchery.css')}}">
     <link rel="stylesheet" href="{{asset('assets/global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/morris/morris.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/chartist/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('assets/examples/css/dashboard/analytics.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('assets/global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="{{asset('assets/global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{asset('assets/global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('assets/global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{asset('assets/js/alpine.js')}}"></script>
    {{-- <script src="{{asset('assets/global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script> --}}
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse bg-indigo-600"
      role="navigation">

      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center">
          <img class="navbar-brand-logo" src="{{asset('assets/images/logo-digicorp-white.png')}}" title="Api-Yeastar">
          {{-- <span class="navbar-brand-text hidden-xs-down"> Api-Yeastar</span> --}}
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>

      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-fw dropdown-mega">
              <div class="dropdown-menu" role="menu">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-md-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/panel-structure.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5>Media
                        <span class="badge badge-pill badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            {{-- <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." /> --}}
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            {{-- <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." /> --}}
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            {{-- <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." /> --}}
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            {{-- <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." /> --}}
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            {{-- <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." /> --}}
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            {{-- <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." /> --}}
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="mb-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                        role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                              aria-expanded="false" aria-controls="siteMegaCollapseOne">
                              Collapsible Group Item #1
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                            role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque accusamus
                              clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                              data-parent="#siteMegaAccordion" aria-expanded="false"
                              aria-controls="siteMegaCollapseTwo">
                              Collapsible Group Item #2
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                            role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur mortis
                              animus adoptionem, bello statuat expediunt naturales.
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                              data-parent="#siteMegaAccordion" aria-expanded="false"
                              aria-controls="siteMegaCollapseThree">
                              Collapsible Group Item #3
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                            role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->

          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="{{asset('assets/global/portraits/5.jpg')}}">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
        <ul class="site-menu" data-plugin="menu">
          {{-- <li class="site-menu-item has-sub active open">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                        <div class="site-menu-badge">
                            <span class="badge badge-pill badge-success">3</span>
                        </div>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../index.html">
                  <span class="site-menu-title">Dashboard v1</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../dashboard/v2.html">
                  <span class="site-menu-title">Dashboard v2</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../dashboard/ecommerce.html">
                  <span class="site-menu-title">Ecommerce</span>
                </a>
              </li>
              <li class="site-menu-item active">
                <a class="animsition-link" href="../dashboard/analytics.html">
                  <span class="site-menu-title">Analytics</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../dashboard/team.html">
                  <span class="site-menu-title">Team</span>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                    <span class="site-menu-title">Layouts</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/menu-collapsed.html">
                  <span class="site-menu-title">Menu Collapsed</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Grid Scaffolding</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/layout-grid.html">
                  <span class="site-menu-title">Layout Grid</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/headers.html">
                  <span class="site-menu-title">Different Headers</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/panel-transition.html">
                  <span class="site-menu-title">Panel Transition</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/boxed.html">
                  <span class="site-menu-title">Boxed Layout</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/two-columns.html">
                  <span class="site-menu-title">Two Columns</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/menubar-flipped.html">
                  <span class="site-menu-title">Menubar Flipped</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/bordered-header.html">
                  <span class="site-menu-title">Bordered Header</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Page Aside</span>
                  <div class="site-menu-label">
                    <span class="badge badge-danger badge-round mr-25">new</span>
                  </div>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/aside-left-static.html">
                      <span class="site-menu-title">Left Static</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/aside-right-static.html">
                      <span class="site-menu-title">Right Static</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/aside-left-fixed.html">
                      <span class="site-menu-title">Left Fixed</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/aside-right-fixed.html">
                      <span class="site-menu-title">Right Fixed</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li> --}}
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Extensions</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="{{route('show-contacts')}}">
                  <span class="site-menu-title">Liste</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                    <span class="site-menu-title">Contacts</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="{{route('show-contacts')}}">
                  <span class="site-menu-title">Liste</span>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                    <span class="site-menu-title">Basic UI</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Panel</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/panel-structure.html">
                      <span class="site-menu-title">Panel Structure</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/panel-actions.html">
                      <span class="site-menu-title">Panel Actions</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/panel-portlets.html">
                      <span class="site-menu-title">Panel Portlets</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/buttons.html">
                  <span class="site-menu-title">Buttons</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/cards.html">
                  <span class="site-menu-title">Cards</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/dropdowns.html">
                  <span class="site-menu-title">Dropdowns</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/icons.html">
                  <span class="site-menu-title">Icons</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/list.html">
                  <span class="site-menu-title">List</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/tooltip-popover.html">
                  <span class="site-menu-title">Tooltip &amp; Popover</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/modals.html">
                  <span class="site-menu-title">Modals</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/tabs-accordions.html">
                  <span class="site-menu-title">Tabs &amp; Accordions</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/images.html">
                  <span class="site-menu-title">Images</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/badges.html">
                  <span class="site-menu-title">Badges</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/progress-bars.html">
                  <span class="site-menu-title">Progress Bars</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/carousel.html">
                  <span class="site-menu-title">Carousel</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/typography.html">
                  <span class="site-menu-title">Typography</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/colors.html">
                  <span class="site-menu-title">Colors</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../uikit/utilities.html">
                  <span class="site-menu-title">Utilties</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                    <span class="site-menu-title">Advanced UI</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item hidden-sm-down site-tour-trigger">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Tour</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/animation.html">
                  <span class="site-menu-title">Animation</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/highlight.html">
                  <span class="site-menu-title">Highlight</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/lightbox.html">
                  <span class="site-menu-title">Lightbox</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/scrollable.html">
                  <span class="site-menu-title">Scrollable</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/rating.html">
                  <span class="site-menu-title">Rating</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/context-menu.html">
                  <span class="site-menu-title">Context Menu</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/alertify.html">
                  <span class="site-menu-title">Alertify</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/masonry.html">
                  <span class="site-menu-title">Masonry</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/treeview.html">
                  <span class="site-menu-title">Treeview</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/toastr.html">
                  <span class="site-menu-title">Toastr</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/maps-vector.html">
                  <span class="site-menu-title">Vector Maps</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/maps-google.html">
                  <span class="site-menu-title">Google Maps</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/sortable-nestable.html">
                  <span class="site-menu-title">Sortable &amp; Nestable</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../advanced/bootbox-sweetalert.html">
                  <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                    <span class="site-menu-title">Structure</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/alerts.html">
                  <span class="site-menu-title">Alerts</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/ribbon.html">
                  <span class="site-menu-title">Ribbon</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/pricing-tables.html">
                  <span class="site-menu-title">Pricing Tables</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/overlay.html">
                  <span class="site-menu-title">Overlay</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/cover.html">
                  <span class="site-menu-title">Cover</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/timeline-simple.html">
                  <span class="site-menu-title">Simple Timeline</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/timeline.html">
                  <span class="site-menu-title">Timeline</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/step.html">
                  <span class="site-menu-title">Step</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/comments.html">
                  <span class="site-menu-title">Comments</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/media.html">
                  <span class="site-menu-title">Media</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/chat.html">
                  <span class="site-menu-title">Chat</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/testimonials.html">
                  <span class="site-menu-title">Testimonials</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/nav.html">
                  <span class="site-menu-title">Nav</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/navbars.html">
                  <span class="site-menu-title">Navbars</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/blockquotes.html">
                  <span class="site-menu-title">Blockquotes</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/pagination.html">
                  <span class="site-menu-title">Pagination</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../structure/breadcrumbs.html">
                  <span class="site-menu-title">Breadcrumbs</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                    <span class="site-menu-title">Widgets</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../widgets/statistics.html">
                  <span class="site-menu-title">Statistics Widgets</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../widgets/data.html">
                  <span class="site-menu-title">Data Widgets</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../widgets/blog.html">
                  <span class="site-menu-title">Blog Widgets</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../widgets/chart.html">
                  <span class="site-menu-title">Chart Widgets</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../widgets/social.html">
                  <span class="site-menu-title">Social Widgets</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../widgets/weather.html">
                  <span class="site-menu-title">Weather Widgets</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                    <span class="site-menu-title">Forms</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/general.html">
                  <span class="site-menu-title">General Elements</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/material.html">
                  <span class="site-menu-title">Material Elements</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/advanced.html">
                  <span class="site-menu-title">Advanced Elements</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/layouts.html">
                  <span class="site-menu-title">Form Layouts</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/wizard.html">
                  <span class="site-menu-title">Form Wizard</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/validation.html">
                  <span class="site-menu-title">Form Validation</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/masks.html">
                  <span class="site-menu-title">Form Masks</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Editors</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/editor-summernote.html">
                      <span class="site-menu-title">Summernote</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/editor-markdown.html">
                      <span class="site-menu-title">Markdown</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/editor-ace.html">
                      <span class="site-menu-title">Ace Editor</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/image-cropping.html">
                  <span class="site-menu-title">Image Cropping</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../forms/file-uploads.html">
                  <span class="site-menu-title">File Uploads</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                    <span class="site-menu-title">Tables</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/basic.html">
                  <span class="site-menu-title">Basic Tables</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/bootstrap.html">
                  <span class="site-menu-title">Bootstrap Tables</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/floatthead.html">
                  <span class="site-menu-title">floatThead</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/responsive.html">
                  <span class="site-menu-title">Responsive Tables</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/editable.html">
                  <span class="site-menu-title">Editable Tables</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/jsgrid.html">
                  <span class="site-menu-title">jsGrid</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/footable.html">
                  <span class="site-menu-title">FooTable</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/datatable.html">
                  <span class="site-menu-title">DataTables</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/jqtabledit.html">
                  <span class="site-menu-title">Jquery Tabledit</span>
                  <div class="site-menu-label">
                    <span class="badge badge badge-info badge-round">new</span>
                  </div>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../tables/table-dragger.html">
                  <span class="site-menu-title">Table Dragger</span>
                  <div class="site-menu-label">
                    <span class="badge badge badge-warning badge-round">new</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                    <span class="site-menu-title">Chart</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/chartjs.html">
                  <span class="site-menu-title">Chart.js</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/gauges.html">
                  <span class="site-menu-title">Gauges</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/flot.html">
                  <span class="site-menu-title">Flot</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/peity.html">
                  <span class="site-menu-title">Peity</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/sparkline.html">
                  <span class="site-menu-title">Sparkline</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/morris.html">
                  <span class="site-menu-title">Morris</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/chartist.html">
                  <span class="site-menu-title">Chartist.js</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/rickshaw.html">
                  <span class="site-menu-title">Rickshaw</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/pie-progress.html">
                  <span class="site-menu-title">Pie Progress</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../charts/c3.html">
                  <span class="site-menu-title">C3</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                    <span class="site-menu-title">Apps</span>
                          <div class="site-menu-label">
                              <span class="badge badge-danger badge-round">new</span>
                          </div>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/contacts/contacts.html">
                  <span class="site-menu-title">Contacts</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/calendar/calendar.html">
                  <span class="site-menu-title">Calendar</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/notebook/notebook.html">
                  <span class="site-menu-title">Notebook</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/taskboard/taskboard.html">
                  <span class="site-menu-title">Taskboard</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Documents</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/documents/articles.html">
                      <span class="site-menu-title">Articles</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/documents/categories.html">
                      <span class="site-menu-title">Categories</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/documents/article.html">
                      <span class="site-menu-title">Article</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/forum/forum.html">
                  <span class="site-menu-title">Forum</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/message/message.html">
                  <span class="site-menu-title">Message</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/projects/projects.html">
                  <span class="site-menu-title">Projects</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/mailbox/mailbox.html">
                  <span class="site-menu-title">Mailbox</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/media/overview.html">
                  <span class="site-menu-title">Media</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/work/work.html">
                  <span class="site-menu-title">Work</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/location/location.html">
                  <span class="site-menu-title">Location</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../apps/travel/travel.html">
                  <span class="site-menu-title">Travel</span>
                  <div class="site-menu-label">
                    <span class="badge badge-info badge-round">new</span>
                  </div>
                </a>
              </li>
            </ul>
          </li> --}}
        </ul>  </div>
    </div>

    <!-- Page -->
        {{-- @yield('content') --}}
        {{ $slot ?? '' }}
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      {{-- <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div> --}}
    </footer>
    <!-- Core  -->
    <script src="{{asset('/assets/global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('assets/global/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/global/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/global/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('assets/global/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('assets/global/vendor/mousewheel/jquery.mousewheel.j')}}s"></script>
    <script src="{{asset('assets/global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('assets/global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    <script src="{{asset('assets/global/vendor/ashoverscroll/jquery-asHoverScroll.j')}}s"></script>

    <!-- Plugins -->
    {{-- <script src="{{asset('assets/global/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('assets/global/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('assets/global/vendor/screenfull/screenfull.js')}}../../.."></script>
    <script src="{{asset('assets/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
    <script src="{{asset('assets/global/vendor/chartist/chartist.js')}}"></script>
    <script src="{{asset('assets/global/vendor/raphael/raphael.min.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/global/vendor/morris/morris.min.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script> --}}
    <!-- Scripts -->
    <script src="{{asset('assets/global/js/Component.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin.js')}}"></script>
    <script src="{{asset('assets/global/js/Base.js')}}"></script>
    <script src="{{asset('assets/global/js/Config.js')}}"></script>

    <script src="{{asset('assets/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('assets/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('assets/js/Plugin/menu.js')}}"></script>

    <!-- Config -->
    <script src="{{asset('assets/global/js/config/colors.js')}}"></script>
    <script src="{{asset('assets/js/config/tour.js')}}"></script>
    <script>Config.set('assets', 'assets/');</script>

    <!-- Page -->
    <script src="{{asset('assets/js/Site.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/switchery.js')}}"></script>
    <script src="{{asset('assets/global/js/Plugin/matchheight.js')}}"></script>
    {{-- <script src="{{asset('assets/examples/js/dashboard/analytics.js')}}"></script> --}}
    @livewireScripts

    {{-- <script type="text/javascript">
        var statusUser = document.querySelectorAll(".statusUser");
            console.log(statusUser);
            statusUser.forEach(element =>{
                let statusValue = element.innerText;
                console.log(statusValue);
            });
    </script> --}}
  </body>
</html>
