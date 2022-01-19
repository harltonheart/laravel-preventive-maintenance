<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="300">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles and bootstrap -->
    @include('layouts.csslinks')
    
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
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

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .backg1{
        background-image: linear-gradient(to right, rgba(131, 96, 195,.5), rgba(46, 191, 145,.5));
    }
    .backg2{
        background-image: linear-gradient(to right, rgba(255, 251, 213,.5), rgba(178, 10, 44,.5));
    }
    .backg3{
        background-image: radial-gradient(circle farthest-side, rgba(252, 234, 187,.5), rgba(248, 181, 0,.5));
    }
    .backg4{
        background-image: linear-gradient(to right, rgba(255, 153, 102,.5), rgba(255, 94, 98,.5));
    }
    .backg5{
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
    }
    .backg6{
        background-image: linear-gradient(to right, #8360c3, #2ebf91);
    }
    .backg7{
        background-image: linear-gradient(-20deg, #00cdac 0%, #8ddad5 100%);
    }
    .backg8{
        background-image: radial-gradient( circle farthest-corner at 22.4% 21.7%, rgba(4,189,228,1) 0%, rgba(2,83,185,1) 100.2% );
    }
    .text{
        margin: 10px 0 0 15px;
        font-size: .9rem;
        color: #000;
    }
    .sizes{
        width: 100%;
        height: 6rem;
    }
    .stripe-table{
        background: rgba(115, 134, 213, .8);
    }
    .text-odd{
        background: #ccc;
    }
    .stripe-table:hover{
        background-color: rgba(115, 134, 213, .9);
        cursor: pointer;
    }
    .text-odd:hover{
        background: rgba(0,0,0,.2);
        cursor: pointer;
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
            <div id="content">
                @include('layouts.uppernav')
                <div class="p-1">
                    <div class="row">
                    <div class="col-lg-9 col-md-12">
            
                    
                        <div class="wrap flex-grow-1 p-4 bg-light rounded-app">
                            <h3 class="mt-3">Dashboard</h3>
                            <div class="my-5">

                                {{-- Switch and Post Data Area --}}
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        
                                        <div class="row">
                    

                                            <div class="col-lg-3 col-md-6 text1 mb-4">
                                                <div class="sizes rounded shadow-lg backg1">
                                                    <label class="text"><i class="far fa-hdd"></i> Switch</label><br>
                                                    <div class="text-center" style="font-size: 2rem; font-weight: bold;font-family: 'Trebuchet MS';">{{$device->where('type','Switch')->count()}}</div>
                                                </div>
                                            </div>
                                            
                                            
                    
                                            <div class="col-lg-3 col-md-6 mb-4">
                                                <div class="sizes rounded shadow-lg backg2">
                                                    <label class="text"><i class="fas fa-hdd"></i> Routers</label><br>
                                                <div class="text-center" style="font-size: 2rem; font-weight: bold;font-family: 'Trebuchet MS';">{{$device->where('type','Routers')->count()}}</div>
                                                </div>
                                            </div>
                    

                                            <div class="col-lg-3 col-md-6 mb-4">
                                                <div class="sizes rounded shadow-lg backg3">
                                                    <label class="text"><i class="fab fa-windows"></i> Windows 10</label><br>
                                                <div class="text-center" style="font-size: 2rem; font-weight: bold;font-family: 'Trebuchet MS';">{{$posts->where('os','WINDOWS 10')->count()}}</div>
                                                </div>
                                            </div>


                                            <div class="col-lg-3 col-md-6 mb-4">
                                                <div class="sizes rounded shadow-lg backg4">
                                                    <label class="text"><i class="fab fa-windows"></i> Windows 8</label><br>
                                                <div class="text-center" style="font-size: 2rem; font-weight: bold;font-family: 'Trebuchet MS';">{{$posts->where('os','WINDOWS 8')->count()}}</div>
                                                </div>
                                            </div>


                                            <div class="col-lg-3 col-md-6 mb-4">
                                                <div class="sizes rounded shadow-lg backg5">
                                                    <label class="text"><i class="fab fa-windows"></i> Windows 8.1</label><br>
                                                <div class="text-center" style="font-size: 2rem; font-weight: bold;font-family: 'Trebuchet MS';">{{$posts->where('os','WINDOWS 8.1')->count()}}</div>
                                                </div>
                                            </div>


                                            <div class="col-lg-3 col-md-6 mb-4">
                                                <div class="sizes rounded shadow-lg backg6">
                                                    <label class="text"><i class="fab fa-windows"></i> Windows 7</label><br>
                                                <div class="text-center" style="font-size: 2rem; font-weight: bold;font-family: 'Trebuchet MS';">{{$posts->where('os','WINDOWS 7')->count()}}</div>
                                                </div>
                                            </div>

                                            
                    
                                            <div class="col-lg-3 col-md-6 mb-4">
                                                <div class="sizes rounded shadow-lg backg7">
                                                    <label class="text"><i class="fas fa-print"></i> Printer</label><br>
                                                    <div class="text-center" style="font-size: 2rem; font-weight: bold;font-family: 'Trebuchet MS';">{{$posts->whereNotIn('printer', array('N/A', null))->count()}}</div>
                                                </div>
                                            </div>
                    
                    
                                            <div class="col-lg-3 col-md-6 mb-4">
                                                <div class="sizes rounded shadow-lg backg8">
                                                    <label class="text"><i class="fas fa-laptop"></i> Laptop</label><br>
                                                    <div class="text-center" style="font-size: 2rem; font-weight: bold;font-family: 'Trebuchet MS';">{{DB::table('posts')->select(DB::raw('count(*) as count'))->where('cpu', 'like', "%LAPTOP%")->first()->count;}}</div>
                                                </div>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                                {{-- End of Switch and Post Data Area --}}
                    
                    
                    
                                {{-- Department Area --}}
                                <div class="input-group col-lg-5 col-md-7 col-8 ml-auto">
                                    <input class="form-control" type="get" name="query" placeholder="Search Department..." aria-label="Search" id="search">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                                    </div>
                                </div>


                                <div class="mt-3">
                                    <div id="table_data">
                                        @include('paginate')
                                    </div>
                                </div>
                    
                                {{-- PAGINATION --}}
                                
                                    {!! $dept->links() !!}  
                                    
                                {{-- End of Department Area --}}
                                    
                    
                            </div>
                            @include('layouts.activities')
                            
                        </div>
                
                    
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                    @include('homerightnav')
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
    @include('layouts.footer')
    {{-- Script --}}
    @include('layouts.script')
</body>

</html>
