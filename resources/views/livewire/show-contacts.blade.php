<div class="page">
    <div>
        {{-- {{$this->myResponse}}<br> --}}
    </div>
    <div class="page-header">
      <h1 class="page-title">Liste Contacts</h1>
    </div>
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        {{-- <div class="col-12">
          <div id="productOverviewWidget" class="card card-shadow card-md">
            <div class="card-header card-header-transparent py-20">
              <div class="btn-group dropdown">
                <a href="#" class="text-body dropdown-toggle blue-grey-700 text-uppercase" data-toggle="dropdown">Product Sales</a>
                <div class="dropdown-menu animate" role="menu">
                  <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                  <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                  <a class="dropdown-item" href="#" role="menuitem">Profit</a>
                </div>
              </div>
              <div class="card-header-actions">
                <ul class="nav nav-pills nav-pills-rounded product-filters">
                  <li class="nav-item">
                    <a class="active nav-link" href="#scoreLineToDay" data-toggle="tab">Day</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#scoreLineToWeek" data-toggle="tab">Week</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#scoreLineToMonth" data-toggle="tab">Month</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="card-block p-20">
              <div class="tab-content">
                <div class="ct-chart tab-pane active" id="scoreLineToDay"></div>
                <div class="ct-chart tab-pane" id="scoreLineToWeek"></div>
                <div class="ct-chart tab-pane" id="scoreLineToMonth"></div>
              </div>
              <div id="productOptionsData" class="text-center">
                <div class="row no-space">
                  <div class="col-xl-3 col-md-6">
                    <div class="counter">
                      <div class="counter-label">Vist</div>
                      <div class="counter-number-group text-truncate">
                        <span class="counter-number-related red-600">+</span>
                        <span class="counter-number">681</span>
                      </div>
                      <div class="ct-chart" data-counter-type="productVist"></div>
                    </div>
                  </div>

                  <div class="col-xl-3 col-md-6">
                    <div class="counter">
                      <div class="counter-label">Unique Vistors</div>
                      <div class="counter-number-group text-truncate">
                        <span class="counter-number-related green-600">-</span>
                        <span class="counter-number">522</span>
                      </div>
                      <div class="ct-chart" data-counter-type="productVistors"></div>
                    </div>
                  </div>

                  <div class="col-xl-3 col-md-6">
                    <div class="counter">
                      <div class="counter-label">Page Views</div>
                      <div class="counter-number-group text-truncate">
                        <span class="counter-number-related green-600">-</span>
                        <span class="counter-number">1,622</span>
                      </div>
                      <div class="ct-chart" data-counter-type="productPageViews"></div>
                    </div>
                  </div>

                  <!-- The fourth Counter Block-->
                  <div class="col-xl-3 col-md-6">
                    <div class="counter">
                      <div class="counter-label">Bounce Rate</div>
                      <div class="counter-number-group text-truncate">
                        <span class="counter-number-related red-600">+</span>
                        <span class="counter-number">843</span>
                      </div>
                      <div class="ct-chart" data-counter-type="productBounceRate"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

        {{-- <div class="col-xl-7 col-12">
          <div id="browsersFlowWidget" class="card card-shadow card-md">
            <div class="card-header card-header-transparent pb-15">
              <p class="font-size-14 blue-grey-700 mb-0">BROWSER FLOW</p>
            </div>
            <div class="card-block px-30">
              <div class="row">
                <div class="col-md-6">
                  <table class="table table-analytics mb-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Browser</th>
                        <th>Vists</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/browser/chrome-logo.png" title="Chrome"
                            alt="Chrome">
                        </td>
                        <td>
                          Chrome
                        </td>
                        <td>
                          11,976
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/browser/firefox-logo.png" title="Firefox"
                            alt="Firefox">
                        </td>
                        <td>
                          Firefox
                        </td>
                        <td>
                          1,706
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/browser/safari-logo.png" title="Safari"
                            alt="Safari">
                        </td>
                        <td>
                          Safari
                        </td>
                        <td>
                          1,677
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/browser/internet-logo.png" title="Internet"
                            alt="Internet">
                        </td>
                        <td>
                          Internet
                        </td>
                        <td>
                          1,268
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/browser/opera-logo.png" title="Opera" alt="Opera">
                        </td>
                        <td>
                          Opera
                        </td>
                        <td>
                          915
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-6 px-0">
                  <div id="browersVistsDonut"></div>

                  <div id="weekStackedBarChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

        <div class="col-xl-5 col-12">
          <div id="countriesVistsWidget" class="card card-shadow card-md">
            <div class="card-header card-header-transparent pb-15">
              {{-- <p class="font-size-14 blue-grey-700 mb-0">VISTS IN DIFFERENT COUNTRIES</p> --}}
            </div>
            <div class="card-block px-30 pt-0">
              <div class="table-responsive">
                <table class="table table-analytics mb-0 text-nowrap">
                  <thead>
                    <tr>
                      <th class="">ID</th>
                      <th class="">NUMERO</th>
                      <th class="">UTILISATEUR</th>
                      <th class="">STATUT</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($myResponse as $item[0] => $value)
                        <tr>
                            {{-- <td>{{$value["number"]}}</td> --}}
                            {{-- <td>{{$value["number"]}}</td> --}}
                            <td>...</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
