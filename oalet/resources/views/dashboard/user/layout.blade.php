<!DOCTYPE html>
<html>
    <head>
        <title>Oalet</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> --}}
        {{-- <link href="//fonts.googleapis.com/css?family=Bitter:400,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet"> --}}
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="page">
            
            <header class="Dashboard__Page__Header">
                
                <div class="container">
                    
                    @include('dashboard.user.partials.main-nav')

                </div>

                <div class="User__Info__Container">
                    <div class="container Account__Figure">
                        <span>$ 5000.00</span>
                    </div>
                    <div class="Sub__Nav">
                        <div class="container">
                            @include('dashboard.user.partials.sub-nav')
                        </div>
                    </div>
                </div>

            </header>

            <div class="container">
              
                @yield('content')

            </div>     

        </div>

    </body>

    <script src="{{ asset('/js/jquery.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('/js/bootstrap.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('/js/scripts.js') }}" type="text/javascript" charset="utf-8"></script>
</html>
