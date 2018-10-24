<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Journal')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .subtitle {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
        <div class="jumbotron flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @if(Auth::guest())
                        Hi Guest! 
                    @else 
                        {{-- Hi {{ Auth::user()->name }}! --}}
                        Hi {{ ucfirst(trans(Auth::user()->name)) }}!
                    @endif
                </div>

                <hr class="my-4">

                <div class="subtitle m-b-md">
                    Welcome To {{config('app.name', 'Journal')}}!
                </div>
            
                <div class="links">
                    @if (Auth::guest())
                        <a href="{{ route('login') }}">Login</a>
                        <a class="nav-link" href="/about">About</a>
                        <a href="{{ route('register') }}">Register</a>
                    @else
                        <a class="nav-link" href="/home">Home</a>
                        <a class="nav-link" href="/about">About</a>
                        <a class="nav-link" href="/posts">Blog</a>
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
