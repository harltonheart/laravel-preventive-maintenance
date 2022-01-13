<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $dept->department }} (Preventive Summary)</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles and bootstrap -->
    @include('layouts.csslinks')
    
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> --}}
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /> --}}
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
</head>
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .content-bg{
      background-color: rgba(130, 130, 130, 0.104);
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    #whole-bg{
      background-color: rgb(169, 169, 169);
    }
    .rounded-app{
        border-radius: 12px;
    }
  </style>
<body class="d-flex flex-column min-vh-100" id="whole-bg">

        <div class="wrapper flex-grow-1">
            @include('layouts.nav')
            <div id="content" class="content-bg">
                @include('layouts.uppernav')
                <div class="p-2 ml-2">
                <div class="row">
                  <div class="col-lg-9 col-md-12 shadow-lg p-3 bg-light rounded-app">

                    {{-- Summary Container area --}}
                      <div class="container testbg">
                          <center><u><h3 class="mt-5">PREVENTIVE MAINTENANCE SUMMARY</h3></u></center>
                          <center><p>INTEGRATED HOSPITAL OPERATIONS MANAGEMENT SYSTEM</p></center>
                        <div class="my-5">
                          
                          <div class="mt-3">
                            <div id="year_data">
                              @include('department.year')
                            </div>
                          </div>
                          
                            @if(Auth::user()->username !== 'guest')
                              <a href="/computer" class="btn btn-primary btn-sm float-right">Add New</a> 
                            @endif
                            {!! $comp->links() !!}
                              {{-- <a href="#" class="btn btn-outline-info btn-sm float-right">Print Summary</a>  --}}

                        </div>
                        @include('department.device')


                        @include('layouts.activities')
                      </div>
                    {{-- End of Summary Container Area --}}


                  </div>
                    <div class="col-lg-3 col-md-12">
                      @include('department.summaryrightnav')
                    </div>
                </div>
                </div>
            </div>


          </div>
        @if ($flash = session('message'))
          <div id="flash-message" class="alert alert-success" role="alert">
                <strong>{{ $flash }}</strong>
            </div> 
        @endif
        {{-- @include('layouts.modal') --}}
    @include('layouts.footer')
    {{-- Script --}}
    @include('layouts.script')
</body>

  <!-- Modal for add new devices-->
  <div class="modal fade" id="deviceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new device:  {{$dept->department}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <form  method="post" action="/device/{{$dept->id}}" id="add_device">
            @csrf
              <input type="hidden" name="location" value="{{$dept->department}}">
                

              <div class="form-group row ">
                <label for="" class="col-sm-4 col-form-label">Type:</label>
                <div class="col-sm-7">
                  {{-- <input type="text" class="form-control form-control-sm" placeholder="Type of device" name="type"> --}}
                  <input type="text" name="type" class="form-control form-control-sm" placeholder="Type of device" list="device_type">
                        <datalist id="device_type">
                            <option value="Switch">
                            <option value="Fiber Switch">
                            <option value="Router">
                            <option value="Modem">
                            <option value="Xerox">
                        </datalist>
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Brand Name:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Brand Name" name="brand_name">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Device Name:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Device Name from fortinet" name="device_name">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">IP address:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="IP Address" name="ip_address">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">No. of ports:</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control form-control-sm" id="" placeholder="###" name="port">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Source location:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Source Network Location" name="source">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Serial No.:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Serial #" name="serial">
                </div>
              </div>


        </form>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" form="add_device">Save</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




@foreach($dept->devices as $devices)
  <!-- Modal for Edit devices-->
  <div class="modal fade" id="editDevice{{$devices->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update:  {{$devices->location}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <form  method="post" action="{{ route('update.device', $devices->id)}}" id="edit_device{{$devices->id}}">
            @csrf
            @method('PATCH')
            <input type="hidden" name="location" value="{{$devices->location}}">

              <div class="form-group row ">
                <label for="" class="col-sm-4 col-form-label">Type:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Type of device" name="type" value="{{ old('type') ?? $devices->type }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Brand Name:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Brand Name" name="brand_name" value="{{ old('brand_name') ?? $devices->brand_name }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Device Name:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Device Name from fortinet" name="device_name" value="{{ old('device_name') ?? $devices->device_name }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">IP address:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="IP Address" name="ip_address" value="{{ old('ip_address') ?? $devices->ip_address }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">No. of ports:</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control form-control-sm" id="" placeholder="###" name="port" value="{{ old('port') ?? $devices->port }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Source location:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Location" name="source" value="{{ old('source') ?? $devices->source }}">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Serial No.:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form-control-sm" id="" placeholder="Serial #" name="serial"  value="{{ old('serial') ?? $devices->serial }}">
                </div>
              </div>
              
              <div class="form-group row">
 
                <label for="active" class="col-sm-4 col-form-label">Status:</label> 
                <div class="col-sm-7">
                  <select name="active" class="form-control form-control-sm" autofocus>
                      <option value="1" {{$devices->active == '1' ? 'selected' : ''}}>Active</option>
                      <option value="0" {{$devices->active == '0' ? 'selected' : ''}}>Defective</option>
                  </select>
                </div>
              </div>


        </form>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-sm" form="edit_device{{$devices->id}}">Save</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach


@foreach($dept->devices as $devices)
  <!-- Modal Delete devices-->
  <div class="modal fade" id="deleteDevice{{$devices->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="exampleModalLabel">{{$devices->location}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-dark">Are you sure you want to remove this Device ?</p>
        </div>
          <div class="text-secondary ml-3">
            <h5 class="">{{$devices->brand_name}}</h5> {{-- brand name--}}
            <label for="">Device name:</label> <span>{{$devices->device_name}}</span><br> {{--device name--}}
            <label for="">IP address:</label> <span>{{$devices->ip_address}}</span><br>
            <label for="">No. of ports:</label> <span>{{$devices->port}}</span><br>
            <label for="">Source location:</label> <span>{{$devices->source}}</span><br>
            <label for="">Serial No.:</label> <span>{{$devices->serial}}</span><br>
            <label for="">Status:</label> @if($devices->active == '1')<span class="text-success">Active</span> @else <span class="text-danger">Defective</span> @endif
          </div>
        <div class="modal-footer">
          <form method="post" action="/devicedelete/{{$devices->id}}">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-sm btn-primary">Yes</button>
          </form>  
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
@endforeach











</html>
