<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <meta http-equiv="refresh" content="900">{{-- 15mins --}}

    <title>PREVENTIVE MAINTENANCE</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootsrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}">


    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
    <style>
        .wrapper{
            position: relative;
            background-repeat:no-repeat;
            background-size:100% 100vh;
        }
        .cont{
            margin-top: 2%;
        }
        .color-bg{
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 25px;
        }
        #username{
            border-radius: 50px;
        }
        #password{
            border-radius: 50px;
        }
        .btn-sign{
            border-radius: 50px;
        }
        .spinner-default{
            display: none;
        }
        .spinner{
            display: none;
        }
    </style>
<body class="d-flex flex-column min-vh-100" style="overflow: hidden">
    <div class="wrapper flex-grow-1" style="background-image: url('{{asset('css/IT.jpg')}}');">
        <form class="form-signin px-3 mt-4 form-prevent-default" method="POST" action="{{ route('login') }}">
            @csrf
        
            {{-- username --}}
        
            <input  type="hidden" name="username" value="guest">
        
            {{-- password --}} 
            <input  type="hidden" name="password" value="guest123">

            <center>
                    <button type="submit" class="text-light btn btn-info btn-prevent-default">
                         Default Login <i class="spinner-default fa fa-spinner fa-spin float-right mt-1 ml-1"></i>
                    </button>
            </center>
        </form>
        <div class="container cont">
            <div class="col-md-6 col-lg-4 col-sm-8 m-auto py-3 color-bg">

                <img src="{{ asset('img/sottologo-png.png') }}" class="rounded mx-auto d-block mt-2" width="120px" height="110px">
                <center class="text-dark mt-2"><h4>Preventive Maintenance</h4></center>

            
                <form class="form-signin mt-5 px-3 form-prevent" method="POST" action="{{ route('login') }}">
                    @csrf
                
                    {{-- username --}}
                    <div class="form-label-group input-group-sm">
                
                            <input id="username" type="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
                
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                
                    {{-- password --}}
                    <div class="form-label-group input-group-sm mt-4">
                        
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                
                    <button type="submit" class="btn btn-sm btn-info btn-block mt-5 mb-2 btn-sign btn-prevent text-nowrap">
                        Sign in <i class="spinner fa fa-spinner fa-spin float-right mt-1"></i>
                    </button>
                
                </form>

                <small class="ml-3"><a class="text-dark float-right mr-4" href="/register">Sign up</a></small>
            </div>
            
        </div>
               
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        (function(){
            $('.form-prevent-default').on('submit', function(){
                $('.btn-prevent-default').attr('disabled', 'true');
                $('.spinner-default').show();
            })

            $('.form-prevent').on('submit', function(){
                $('.btn-prevent').attr('disabled', 'true');
                $('.spinner').show();
            })
        })();

        var csrfToken = $('[name="csrf_token"]').attr('content');

        setInterval(refreshToken, 1800000); // 30mins 

        function refreshToken(){
            $.get('refresh-csrf').done(function(data){
                csrfToken = data; // the new token
            });
        }

        setInterval(refreshToken, 1800000); // 30 mins
    </script>
</body>
</html>
