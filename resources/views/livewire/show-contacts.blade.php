<div>
    <div class="page">
        <div class="page-header">
            {{-- <h1 class="page-title">Liste Extensions</h1> --}}
          </div>
          <div class="page-content container-fluid">
            <div class="row" data-plugin="matchHeight" data-by-row="true">
                <div class="col-12">
                    <div id="countriesVistsWidget" class="card card-shadow card-md">
                        <div class="card-header card-header-transparent pb-15">
                        </div>
                        <div class="card-block px-30 pt-0">
                            <div class="table-responsive">
                                <table class="table table-analytics mb-0 text-nowrap">
                                    {{-- <thead>
                                        <tr>
                                            <th>STATUT</th>
                                            <th class="">NUMERO</th>
                                            <th class="">NOMS & PRENOMS</th>
                                            <th class="">STATUT</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                      </thead> --}}
                                      <tbody>
                                        {{-- @foreach ($extensionsIPBX as $index => $extension )
                                            <tr>
                                                @if ($extension['status'] == "Registered")
                                                    <td width="100px"><img src="{{asset('assets/images/check.png')}}" class="" alt="" srcset=""></td>
                                                @endif
                                                @if ($extension['status'] == "Unavailable")
                                                    <td width="10px"><img src="{{asset('assets/images/multiply.png')}}" class="" alt="" srcset=""></td>
                                                @endif
                                                @if ($extension['status'] == "Ringing")
                                                    <td><img src="{{asset('assets/images/telephone.png')}}" alt="" srcset=""></td>
                                                @endif
                                                @if ($extension['status'] == "Busy")
                                                    <td><img src="{{asset('assets/images/time.png')}}" alt="" srcset=""></td>
                                                @endif
                                                <td width="90px"><input class="form-control" type="text" wire:model="extensionsIPBX.{{ $index }}.number" readonly></td>
                                                <td width="300px"><input class="form-control" type="text" wire:model="extensionsIPBX.{{ $index }}.username" readonly></td>
                                                @if ($extension['status'] == "Registered")
                                                    <td width="300px">
                                                        <input class="form-control" type="text" wire:model="extensionsIPBX.{{ $index }}.status" readonly>
                                                    </td>
                                                @endif
                                                @if ($extension['status'] == "Unavailable")
                                                    <td width="300px">
                                                        <input class="form-control" type="text" wire:model="extensionsIPBX.{{ $index }}.status" readonly>
                                                    </td>
                                                @endif
                                                @if ($extension['status'] == "Ringing")
                                                    <input class="form-control" type="text" wire:model="extensionsIPBX.{{ $index }}.status" readonly>
                                                @endif
                                                @if ($extension['status'] == "Busy" )
                                                     <input class="form-control" type="text" wire:model="extensionsIPBX.{{ $index }}.status" readonly>
                                                @endif
                                            </tr>
                                        @endforeach --}}
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <!-- Panel Table Add Row -->
            <div class="panel">
              <header class="panel-heading">
                <h3 class="panel-title">Liste Extensions</h3>
              </header>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-15">
                      <button id="addToTable" class="btn btn-outline btn-primary" type="button">
                        <i class="icon wb-plus" aria-hidden="true"></i> Ajouter Extension
                      </button>
                    </div>
                  </div>
                </div>
                <div id="exampleAddRow_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="exampleAddRow_length">
                            </div>
                        </div>
                        {{-- <div class="col-sm-12 col-md-6">
                            <div id="exampleAddRow_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search.." aria-controls="exampleAddRow"></label></div>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-hover table-striped dataTable no-footer" cellspacing="0" id="exampleAddRow" role="grid" aria-describedby="exampleAddRow_info">
                                 <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ETAT</th>
                                        <th>NUMERO</th>
                                        <th>NOMS & PRENOMS</th>
                                        <th>STATUT</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($extensionsInDB as $key => $value)
                                        <tr class="gradeA odd" role="row">
                                            <td>{{$value['id']}}</td>

                                            @if ($value['status'] == "Registered")
                                                <td><img src="{{asset('assets/images/check.png')}}" class="" alt="" srcset=""></td>
                                            @endif
                                            @if ($value['status'] == "Unavailable")
                                                <td><img src="{{asset('assets/images/multiply.png')}}" class="" alt="" srcset=""></td>
                                            @endif
                                            @if ($value['status'] == "Ringing")
                                            <td><img src="{{asset('assets/images/telephone.png')}}" class="" alt="" srcset=""></td>
                                            @endif
                                            @if ($value['status'] == "Busy")
                                            <td><img src="{{asset('assets/images/time.png')}}" class="" alt="" srcset=""></td>
                                            @endif
                                            <td>{{$value['number']}}</td>
                                            <td>{{$value['username']}}</td>

                                            @if ($value['status'] == "Registered")
                                            <td>{{$value['status']}}</td>
                                            @endif
                                            @if ($value['status'] == "Unavailable")
                                            <td>{{$value['status']}}</td>
                                            @endif
                                            @if ($value['status'] == "Ringing")
                                            <td>{{$value['status']}}</td>
                                            @endif
                                            @if ($value['status'] == "Busy")
                                            <td>{{$value['status']}}</td>
                                            @endif
                                            <td class="actions">
                                                <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row" data-toggle="tooltip" data-original-title="Save" hidden=""><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                                <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row" data-toggle="tooltip" data-original-title="Delete" hidden=""><i class="icon wb-close" aria-hidden="true"></i></a>
                                                <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row" data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                                <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row" data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="exampleAddRow_info" role="status" aria-live="polite">
                            </div>
                        </div>
                            <div class="col-sm-12 col-md-7">
                                {{-- <div class="dataTables_paginate paging_simple_numbers" id="exampleAddRow_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="exampleAddRow_previous">
                                            <a href="#" aria-controls="exampleAddRow" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="exampleAddRow" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="exampleAddRow" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="exampleAddRow" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="exampleAddRow" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="exampleAddRow_next"><a href="#" aria-controls="exampleAddRow" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div> --}}
                                @if (count($extensionsInDB))
                                {{$extensionsInDB->links('livewire.livewire_pagination_links')}}
                            @endif
                            </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
