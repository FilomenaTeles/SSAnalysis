<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soft Skills Analysis</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                padding: 10px 0;
            }

            .title {
                font-size: 90px;
                margin-bottom: 60px;
                color: #00adef;
            }



            .links > a {
                color: #00adef;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 100px;
            }

            header{
                width: 100%;
                height: 650px;
                background: #03001e;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e), url(../public/images/img-analytics.jpg);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e), url(../public/images/img-analytics.jpg); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background-size: cover;
                background-attachment: fixed;
                position: relative;
            }

            .wave{
                position: absolute;
                bottom: 0;
                width: 100%;
            }

            footer{
                text-align: center;

            }

        </style>
    </head>

    <body>

        <header>
            <nav>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                        @endauth
                    </div>
                @endif
            </nav>

            <div class="wave" style="height: 250px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path></svg></div>
        </header>

        <main>
            <div class="content">
                <div class="title m-b-md" id="title">
                    Soft Skills Analysis
                </div>
            </div>
        </main>
        <footer>
            @component('master.footer')
            @endcomponent
        </footer>
    </body>

</html>
