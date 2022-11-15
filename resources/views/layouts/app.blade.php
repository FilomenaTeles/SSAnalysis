<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Soft Skills Analysis</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        header{
            width: 100%;
            height: 400px;

            background-image: linear-gradient(to right, #201544, #24174b, #281a52, #2c1c59, #301f60, #40226a, #512474, #62267d, #842487, #a71e8c, #ca138e, #ec008b);

            background-size: cover;
            background-attachment: fixed;
            position: relative;
        }

        .wave{
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .navbar-brand{
            position: absolute;
            right: 0px;
            top: 18px;

            color: #ffffff;
            padding: 0 25px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        footer{
            /*position:sticky;*/
            padding: 8px;
            position: fixed;
            bottom:0;
            text-align: center;
            width: 100%;
            margin: auto;
            height: 29px;
            background-color: white;
            font-size: small;
        }

    </style>

</head>
<body>

    <header>
        <div class="wave" style="height: 250px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-1.97,5.44 C124.43,245.23 349.20,-49.99 501.13,23.20 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path></svg></div>
        <a class="navbar-brand" href="{{ url('/') }}">
            Soft Skills Analysis
        </a>
    </header>

{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
            <div class="container">

{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        <!--
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
{{--        </nav>--}}

            @yield('content')
        </main>
        <footer>
            <!--    <div class="content">-->
            <!--            <div class="row">-->
            <!--                <div id="col1footer"></div>-->
            <div class="">
                <!--                    <h5 class="text-center">-->
                &copy Soft Skills Analysis | Cesae Digital - Centro para o desenvolvimento de Competências Digitais | <?php echo date ('Y-M-d'); ?>
                    <!--                    </h5>-->
            </div>
            <!--            </div>-->
            <!--    </div>-->
        </footer>
    </div>

</body>
</html>
