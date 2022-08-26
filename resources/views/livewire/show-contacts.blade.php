{{-- @dd($this->statusCall); --}}
<div>
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Liste Utilisateurs</h1>
          </div>
          <div class="page-content container-fluid">
            <div class="row" data-plugin="matchHeight" data-by-row="true">
                <div class="col-xl-5 col-12">
                    <div id="countriesVistsWidget" class="card card-shadow card-md">
                        <div class="card-header card-header-transparent pb-15">
                        </div>
                        <div class="card-block px-30 pt-0">
                            <div class="table-responsive">
                                <table class="table table-analytics mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                          <th class="">NUMERO</th>
                                          <th class="">UTILISATEUR</th>
                                          <th class="">STATUT</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($contacts as $index => $contact )
                                            <tr>
                                                <td ><input class="form-control" type="text" wire:model="contacts.{{ $index }}.number" readonly></td>
                                                <td width="200px"><input class="form-control" type="text" wire:model="contacts.{{ $index }}.username" readonly></td>
                                                <td><input class="form-control" type="text" name="statusCall" wire:model="contacts.{{ $index }}.status" value="" readonly></td>
                                                {{-- <td>
                                                   @dd($this->statusCall)
                                                </td> --}}
                                                {{-- @if ($contacts.$index.$status == "Registered")
                                                    <td>
                                                        <img src="{{asset('assets/images/check-mark.png')}}" alt="" srcset="">
                                                    </td>
                                                @else
                                                    <td>

                                                    </td>
                                                @endif --}}
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

</div>
