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
                margin-bottom: 0px;
                color: #36236A;
                font-weight: bold;

            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }

            header{
                width: 100%;
                height: 400px;

                background-size: cover;
                background-attachment: fixed;
                position: relative;

                background-image: linear-gradient(to right, #201544, #24174b, #281a52, #2c1c59, #301f60, #40226a, #512474, #62267d, #842487, #a71e8c, #ca138e, #ec008b), url(../public/images/img-analytics.jpg);

                /*background-image: linear-gradient(to right, rgba(32, 21, 68, 0.82), rgba(36, 23, 75, 0.82), rgba(40, 26, 82, 0.82), rgba(44, 28, 89, 0.83), rgba(48, 31, 96, 0.81), rgba(64, 34, 106, 0.85), rgba(81, 36, 116, 0.87), rgba(98, 38, 125, 0.85), rgba(132, 36, 135, 0.82), rgba(167, 30, 140, 0.85), rgba(202, 19, 142, 0.85), rgba(236, 0, 139, 0.85)), url(../public/images/img-analytics.jpg);*/


            }

            .wave{
                position: absolute;
                bottom: 0;
                width: 100%;
            }

            /*footer{
                text-align: center;
                margin-top: 150px;

            }*/

            footer{
                /*position:sticky;*/
               /* padding-top: 5px;*/
                position: fixed;
                bottom:0;
                text-align: center;
                width: 100%;
                /* margin: auto;*/
                height: 55px;
                background-color: white;
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
            <div class="wave" style="height: 250px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-1.97,5.44 C124.43,245.23 349.20,-49.99 501.13,23.20 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path></svg></div>
        </header>

        <main>
            <div class="content">
                <div class="title m-b-md">
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
