<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $computer->pc_name }} (Workstation)</title>
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



                        {{-- Workstationshow Container Area --}}
                        <div class="container testbg">
                            <center><u><h3 class="mt-5">PREVENTIVE MAINTENANCE (WORKSTATIONS)</h3></u></center>
                            <center><p>INTEGRATED HOSPITAL OPERATIONS MANAGEMENT SYSTEM</p></center>
                          <div class="mt-5">
                            
                            <div class="d-flex justify-content-between">
                              <a href="/summary/{{ $computer->departments->id }}" class="text-primary">View all related on this department</a>
                              @if(Auth::user()->username !== 'guest')
                                <a href="/computer/{{$computer->id}}/edit" class="btn btn-sm btn-success text-white">Edit User</a>
                              @endif
                            </div>
                            <div class="">
                              Status: @if ($computer->active == '1')
                                        <strong class="text-success">ACTIVE</strong> 
                                      @else
                                          <strong class="text-danger">INACTIVE</strong> 
                                      @endif
                            </div>
                            <div class="mt-3">
                                
                                  <table class="table table-bordered post-table" id="userpcinfo">
                                        <tr>
                                            <th>Department:</th>
                                            <td>{{ $computer->departments->department }}</td>
                                            <th>MR TO:</th>
                                            <td>{{ $computer->mr_to }}</td>
                                        </tr>
                                        <tr>
                                            <th>Location:</th>
                                            <td>{{ $computer->location }} </td>
                                            <th>Initial Cost:</th>
                                            <td>{{ $computer->initial_cost }}</td>
                                        </tr>
                                        <tr>
                                            <th>Computer Name:</th>
                                            <td>{{ $computer->pc_name }}</td>
                                            <th>Deployment Date:</th>
                                            <td>{{ $computer->deploy_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>IP ADDRESS:</th>
                                            <td>{{ $computer->ip_add }}({{ $computer->ip_settings }})</td>
                                            <th>Serial No.:</th>
                                            <td>{{ $computer->serial }}</td>
                                        </tr>
                                  </table>


                                  <!--Hardware and Software Post-->
                                  @include('posts.workstationshow')
                                  <!--Remarks Post -->
                                  @include('remarks.remarks')

                                  
                                  <!-- Maintenance Activities -->
                                  @include('layouts.activities')     
                            </div>
                          </div>
                        </div>


                    </div>
                      <div class="col-lg-3 col-md-12">
                        @include('user.workstationrightnav')
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
@include('remarks.createremarks')
@include('remarks.editdeleteremarks')





@foreach ($computer->remarks as $remark)
  <!-- Modal show recomended--> 
  <div class="modal fade" id="showRecommend{{$remark->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <button type="button" class="close ml-auto mr-4 mt-2" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <div class="modal-body">
          <div class="p-2 border rounded border-primary">
            <p class="text-primary">{{ $remark->recommended }}</p>
          </div>
        </div>
          <button type="button" class="btn btn-sm btn-secondary mx-auto mb-2" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
@endforeach

</html>