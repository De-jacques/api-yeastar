<div class="page">
      <div class="page-header">
        <h1 class="page-title">Tableau de Bord</h1>
      </div>

      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="col-xl-7 col-12">
            <div id="browsersFlowWidget" class="card card-shadow card-md">
              <div class="card-header card-header-transparent pb-15">
                <p class="font-size-14 blue-grey-700 mb-0">Informations</p>
              </div>
              <div class="card-block px-30">
                <div class="row">
                  <div class="col-md-6">
                    <table class="table table-analytics mb-0">
                      <thead>
                        <tr>
                          <th>Modèle</th>
                          <th>Série</th>
                          <th>Matériel</th>
                          <th>Logiciel</th>
                          {{-- <td>Extensions</td> --}}
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            {{$infos['devicename']}}
                          </td>
                          <td>
                            {{$infos['sn']}}
                          </td>
                          <td>
                            {{$infos['hardwarever']}}
                          </td>
                          <td>
                            {{$infos['firmwarever']}}
                          </td>
                          {{-- <td>{{$infos['extensionstatus']}}</td> --}}
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
          </div>

          <div class="col-xl-5 col-12">
            <div id="countriesVistsWidget" class="card card-shadow card-md">
              <div class="card-header card-header-transparent pb-15">
                <p class="font-size-14 blue-grey-700 mb-0">VISTS IN DIFFERENT COUNTRIES</p>
              </div>
              <div class="card-block px-30 pt-0">
                <div class="table-responsive">
                  <table class="table table-analytics mb-0 text-nowrap">
                    <thead>
                      <tr>
                        <th class="language">Language</th>
                        <th class="vists">Vists</th>
                        <th class="vists-percent">%Vists</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/country/usa-icon.png" title="USA" alt="USA">
                          <span class="country-name">U.S.A</span>
                        </td>
                        <td>12,924</td>
                        <td>
                          <div class="progress progress-xs mb-0">
                            <div class="progress-bar progress-bar-info bg-blue-600" style="width: 90%" aria-valuemax="100"
                              aria-valuemin="0" aria-valuenow="90" role="progressbar">
                            </div>
                          </div>
                          <span class="progress-percent">90%
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/country/uk-icon.png" title="UK" alt="UK">
                          <span class="country-name">U.K</span>
                        </td>
                        <td>11,246</td>
                        <td>
                          <div class="progress progress-xs mb-0">
                            <div class="progress-bar progress-bar-info bg-blue-600" style="width: 86%" aria-valuemax="100"
                              aria-valuemin="0" aria-valuenow="86" role="progressbar">
                            </div>
                          </div>
                          <span class="progress-percent">86%
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/country/canada-icon.png" title="Canada"
                            alt="Canada">
                          <span class="country-name">Canada</span>
                        </td>
                        <td>10,468</td>
                        <td>
                          <div class="progress progress-xs mb-0">
                            <div class="progress-bar progress-bar-info bg-blue-600" style="width: 68%" aria-valuemax="100"
                              aria-valuemin="0" aria-valuenow="68" role="progressbar">
                            </div>
                          </div>
                          <span class="progress-percent">68%
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/country/germany-icon.png" title="Germany"
                            alt="GermanyGermany">
                          <span class="country-name">Germany</span>
                        </td>
                        <td>8,246</td>
                        <td>
                          <div class="progress progress-xs mb-0">
                            <div class="progress-bar progress-bar-info bg-blue-600" style="width: 56%" aria-valuemax="100"
                              aria-valuemin="0" aria-valuenow="56" role="progressbar">
                            </div>
                          </div>
                          <span class="progress-percent">56%
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/country/china-icon.png" title="China" alt="China">
                          <span class="country-name">China</span>
                        </td>
                        <td>4,354</td>
                        <td>
                          <div class="progress progress-xs mb-0">
                            <div class="progress-bar progress-bar-info bg-blue-600" style="width: 38%" aria-valuemax="100"
                              aria-valuemin="0" aria-valuenow="38" role="progressbar">
                            </div>
                          </div>
                          <span class="progress-percent">38%
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="../../assets/examples/images/country/australia-icon.png" title="Australia"
                            alt="Australia">
                          <span class="country-name">Australia</span>
                        </td>
                        <td>3,675</td>
                        <td>
                          <div class="progress progress-xs mb-0">
                            <div class="progress-bar progress-bar-info bg-blue-600" style="width: 25%" aria-valuemax="100"
                              aria-valuemin="0" aria-valuenow="25" role="progressbar">
                            </div>
                          </div>
                          <span class="progress-percent">25%
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


