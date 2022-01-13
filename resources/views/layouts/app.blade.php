<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Preventive Maintenance')</title>
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
                      @yield('content')
                    </div>
                      <div class="col-lg-3 col-md-12">
                        @include('layouts.rightnav')
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

</html>
