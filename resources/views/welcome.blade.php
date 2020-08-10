<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                   <div class="row">
                        <div class="col-4">
                            {{-- slide show --}}
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title title m-b-md">
                                        INSTAGRAM Z
                                    </div>
                                    <div class="card-text">
                                        <img src="/svg/InstagramZlogo.svg" style="height:200px" >
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                <div class="row mt-5">
                    <div class="links mt-5">
                        <a href="https://laravel.com/docs">ABOUT</a>
                        <a href="https://laracasts.com">HELP</a>
                        <a href="https://laravel-news.com">PRESS</a>
                        <a href="https://blog.laravel.com">API</a>
                        <a href="https://nova.laravel.com">JOPS</a>
                        <a href="https://forge.laravel.com">PRIVACY</a>
                        <a href="https://vapor.laravel.com">TERMS</a>
                        <a href="https://github.com/laravel/laravel">LOCATIONS</a>
                    </div>
                </div>


                
            </div>

            

        </div>
       
    </body>
</html>