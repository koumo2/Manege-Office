<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Groupware</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .cp_navi > div > nav > div {
            background-color: #ffffff;
            border: 1px solid #dedede;
            border-radius: 4px;
            box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
            color: #888888;
            display: inline-block;
            margin: 1em 1%;
            overflow: hidden;
            width: 100%;
            margin: 30px 0px 55px 0px;
    }
    .cp_navi > div > nav > div > ul {
        margin: 0;
        padding: 0;
    }
    .cp_navi ul li {
        display: inline-block;
        list-style-type: none;
        -webkit-transition: all 0.2s;
            transition: all 0.2s;
    }
    .cp_navi > div > nav > div > ul > li > a {
        color: #aaaaaa;
        display: block;
        line-height: 56px;
        padding: 0 10px;
        text-decoration: none;
    }
    .cp_navi > div > nav > div > ul > li:hover {
        background-color: rgb(80, 180, 255);
    }
    .cp_navi > div > nav > div > ul > li:hover > a {
        color: rgb( 255, 255, 255 );
    }
    .cp_navi > div > nav > div > li:hover > a {
        color: rgb( 255, 255, 255 );
    }
    </style>
</head>
<body>
    <!-- <div id="app"> -->
        <div class="cp_navi">
            <div class="col-md-8 mx-auto">
                <nav class="navbar navbar-expand-md navbar-light bg-white">
                    <div class="container">
                        <ul class="navbar-nav mr-auto">
                            <li><a class="navbar-brand" href="http://localhost/groupware/public/login">
                                    Groupware
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    ログイン
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">
                                    新規登録
                                </a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        <!-- </div> -->
        </div>
    <main class="py-4">
    @yield('content')
    </main>
</body>
</html>
