@section('title')
Extensions
@endsection
<div>
    <div class="page">
        <div class="page-header">
            <h1 class="page-title"><a href="{{route('dashboard')}}" rel="noopener noreferrer"><i class="icon wb-home" aria-hidden="true"></a></i></h1>
          </div>
        <div class="page-content">
            <!-- Panel Table Add Row -->
            <div class="panel">
              <header class="panel-heading">
                <h3 class="panel-title"> <a href="{{route('show-extensions')}}">Liste Extensions</a></h3>
              </header>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    {{-- <div class="mb-15">
                      <button id="addToTable" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline btn-primary" type="button">
                        <i class="icon wb-plus" aria-hidden="true"></i> Ajouter
                      </button>
                    </div> --}}
                  </div>
                </div>
                <div id="exampleAddRow_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row d-flex">
                        <div class="col-md-3 mb-4 ml-auto">
                           <input type="search" class="form-control" wire:model="searchValue" placeholder="Rechercher par numéro, noms & prenoms, status" name="" id="">
                        </div>
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
                                        </tr>

                                        <!--Start Add Extension Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Ajouter une extension</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <h1>{{$number}}</h1>
                                                              <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control @error('number') is-invalid @enderror" placeholder="Number" name="number" wire:model="number" id="">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder="Username" name="username" id="">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-md-12">
                                                              <input type="text" class="form-control" placeholder="Registername" name="registername" id="">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder="Registerpassword" name="registerpassword" id="">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder="Confirm Registerpassword" name="confirmRegisterpassword" id="">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" wire:click.prevent="addExtension()" class="btn btn-primary">Enregistrer</button>
                                                        </div>
                                                        </form>

                                                    </div>

                                                </div>
                                                </div>
                                            </div>
                                        <!--End Add Extension Modal -->

                                        <!--Start Edit Extension Modal -->
                                        <div class="modal fade" id="EditExtension{{$value['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-success">
                                                <h5 class="modal-title text-white" id="exampleModalLabel ">Modifier Extension - {{$value['number']}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                ...
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-success">Modifier</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    <!--End Edit Extension Modal -->

                                     <!--Start Delete Extension Modal -->
                                     <div class="modal fade" id="DeleteExtension{{$value['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header badge-default">
                                            <h5 class="modal-title" id="exampleModalLabel ">Voulez-vous supprimer l'extension - {{$value['number']}} ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body d-flex justify-content-center">
                                                <button type="button" class="btn btn-outline-danger">Oui</button>
                                                <button type="button" class="btn btn-outline-primary ml-5">Non</button>
                                            </div>
                                            <div class="modal-footer">
                                            {{-- <button type="button" class="btn btn-success">Modifier</button> --}}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <!--End Delete Extension Modal -->
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
