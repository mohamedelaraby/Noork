<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Noork - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet"/>

    <link href="../css/paper-dashboard.css" rel="stylesheet"/>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <link href="../css/themify-icons.css" rel="stylesheet">
</head>
<body>
    <div id="app">
       
        @include('inc.navbar')
        @include('inc.sidebar')
        <div class="container">
          
                @include('inc.messages')
                @yield('content')
            
        </div>
            
    </div>

  


{{-- Footer --}}
    <footer class="page-footer font-small pt-4">

        {{-- Footer links --}}
        <div class="container-fluid text-center text-md-left">
            
            {{-- Grid row --}}
            <div class="row">
                {{-- Grid column --}}
                <div class="col-md-8 mt-md-0 mt-3">
                    {{-- Content --}}
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, delectus.</p>
                </div>
                {{-- Grid column --}}

                <hr class="clearfix w-100 d-md-none pb-3">

                {{-- Grid column --}}
                <div class="col-md-4 mb-md-0 mb-3">
                    {{-- links --}}
                    <ul class="list-unstyled">
                        <li>
                            <a href="">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </div>

              {{-- Grid-row --}}
            </div>

            {{-- copyrights --}}
            <div class="footer-copyright text-center py-3">
                &copy;
                <script>document.write(new Date().getFullYear())</script>
                , made with <i class="fa fa-heart heart"></i> by <a href="">Javed</a>
            </div>
            {{-- copyrights --}}
        </div>
        {{-- container-fluid --}}
    </footer>

</div>
</div>

    <script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>
    