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
                background-image: url(images/fon1.jpg);
                color: darkviolet;
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
                box-shadow: 0 -3 5px darkviolet;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 75px;
            }

            .links > a {
                color: darkviolet;
                padding: 0 25px;
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .sidebar {
                background-color: rgba(255,255,255,0.45);
                margin-right: 5%;
                margin-left:5%;
            }
        </style>
    </head>
    <body>
    <div class="sidebar">
        <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">
                                <?php
                                    $user = auth()->user();
                                    echo $user->name;
                                ?>
                            </a>
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="links">
                        @if (Route::has('login'))
                                @auth
                                <div class="title m-b-md">
                                    Добро пожаловать <br>
                                    <?php
                                          echo $user->name;
                                    ?>
                                </div>
                                    <a href="{{ url('/game') }}">Начать игру</a>
                                @else
                                <div class="title m-b-md">
                                    Добро пожаловать!
                                    </br>Чтобы начать игру нужно авторизироваться
                                </div>
                                    <a href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                        @endif
                    </div>
                </div>
            </div>
    </div>
    </body>
</html>
