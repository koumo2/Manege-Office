<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Manege Office</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body{
        background-color: #ffffff;
        background-image:
        url("data:image/svg+xml,%3Csvg width='84' height='48' viewBox='0 0 84 48' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h12v6H0V0zm28 8h12v6H28V8zm14-8h12v6H42V0zm14 0h12v6H56V0zm0 8h12v6H56V8zM42 8h12v6H42V8zm0 16h12v6H42v-6zm14-8h12v6H56v-6zm14 0h12v6H70v-6zm0-16h12v6H70V0zM28 32h12v6H28v-6zM14 16h12v6H14v-6zM0 24h12v6H0v-6zm0 8h12v6H0v-6zm14 0h12v6H14v-6zm14 8h12v6H28v-6zm-14 0h12v6H14v-6zm28 0h12v6H42v-6zm14-8h12v6H56v-6zm0-8h12v6H56v-6zm14 8h12v6H70v-6zm0 8h12v6H70v-6zM14 24h12v6H14v-6zm14-8h12v6H28v-6zM14 8h12v6H14V8zM0 8h12v6H0V8z' fill='%23e7e7e7' fill-opacity='0.27' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
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
    .cp_navi > div > nav > div > ul > li:hover > a > .caret {
        border-top-color: rgb( 255, 255, 255 );
    }
    </style>
</head>
<body>
    <!-- <div id="app"> -->
        <div class="cp_navi">
            <div class="col-md-7 mx-auto">
                <nav class="navbar navbar-expand-md navbar-light bg-white">
                    <div class="container">
                        <ul class="navbar-nav mr-auto">
                            <li><a class="navbar-brand" href="http://localhost/ManegeOffice/public/login">
                                    Manege Office
                                    <span class="caret">
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    ログイン
                                    <span class="caret">
                                    </span>
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">
                                    新規登録
                                    <span class="caret">
                                    </span>
                                </a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <span class="caret">
                                    </span>
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
