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
    .cp_navi {
            background-color: #ffffff;
            border: 1px solid #dedede;
            border-radius: 4px;
            box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
            color: #888888;
            display: block;
            margin: 1em 1%;
            overflow: hidden;
            width: 100%;
            margin: 50px 0px 50px 0px;
        }
        .cp_navi ul {
            margin: 0;
            padding: 0;
        }
        .cp_navi ul li {
            display: inline-block;
            list-style-type: none;
            -webkit-transition: all 0.2s;
                transition: all 0.2s;
        }
        .cp_navi > ul > li > a > .caret {
            border-top: 4px solid #aaaaaa;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
            content: '';
            display: inline-block;
            height: 0;
            width: 0;
            vertical-align: middle;
            -webkit-transition: color 0.1s linear;
                transition: color 0.1s linear;
        }
        .cp_navi > ul > li > a {
            color: #aaaaaa;
            display: block;
            line-height: 56px;
            padding: 0 10px;
            text-decoration: none;
        }
        .cp_navi > ul > li:hover {
            background-color: rgb(80, 180, 255);
        }
        .cp_navi > ul > li:hover > a {
            color: rgb( 255, 255, 255 );
        }
        .cp_navi > ul > li:hover > a > .caret {
            border-top-color: rgb( 255, 255, 255 );
        }
        .cp_navi > ul > li > div {
            background-color: rgb(80, 180, 255);
            border-top: 0;
            border-radius: 0 0 4px 4px;
            box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
            display: none;
            margin: 0;
            opacity: 0;
            position: absolute;
            width: 165px;
            visibility: hidden;
            -webkit-transiton: opacity 0.2s;
                transition: opacity 0.2s;
        }
        .cp_navi > ul > li:hover > div {
            display: block;
            opacity: 1;
            visibility: visible;
        }
        .cp_navi > ul > li > div ul > li {
            display: block;
        }
        .cp_navi > ul > li > div ul > li > a {
            color: #ffffff;
            display: block;
            padding: 12px 24px;
            text-decoration: none;
        }
        .cp_navi > ul > li > div ul > li:hover > a {
            background-color: rgba( 255, 255, 255, 0.1);
        }
        </style>
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
<div class="container">
<div class="cp_navi">
        <ul>
            <li><a class="navbar-brand" href="http://localhost/groupware/public/login">
                    Groupware
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">新規登録</a>
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
</div>
</nav>
    </div>
<main class="py-4">
            @yield('content')
        </main>
</body>
</html>
