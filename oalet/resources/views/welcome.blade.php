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
            
            <header class="Welcome__Header">
                
                <div class="container">
                    
                    @include('partials.main-nav')

                    <div class="Banner hidden-md-up">
                        
                        <h1>Oalet</h1>

                        <h3 class="text-center">Online Transactions Should not be that Frustrating</h3>

                        <a href="{{ route('getRegister') }}" title="" class="btn btn-secondary btn-call-to-action">Get One Now</a>

                    </div>

                    <div class="jumbotron Banner hidden-sm-down">
                        <h1 class="display-3">Oalet</h1>
                        <p class="lead text-center">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="m-y-md">
                        <p class="text-center">It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead">
                            <a class="btn btn-secondary btn-call-to-action btn-lg" href="{{ route('getRegister') }}" role="button">Get One Now</a>
                        </p>
                    </div>



                </div>
                {{-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img src="{{ asset('images/sliders/first.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/sliders/first.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img data-src="holder.js/900x500/auto/#555:#333/text:Third slide" src="{{ asset('images/sliders/first.jpg') }}" alt="Third slide">
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div> --}}

            </header>   

        </div>

    </body>

    <script src="{{ asset('/js/jquery.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('/js/bootstrap.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('/js/scripts.js') }}" type="text/javascript" charset="utf-8"></script>
</html>
