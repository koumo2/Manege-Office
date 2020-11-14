
<!DOCTYPE html>
<html>
    <head>
　　　　　<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="/js/app.js" defer></script>
        <meta charset="utf-8">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <style>
        body{
            background-color: #ffffff;
            background-image:
            url("data:image/svg+xml,%3Csvg width='84' height='48' viewBox='0 0 84 48' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h12v6H0V0zm28 8h12v6H28V8zm14-8h12v6H42V0zm14 0h12v6H56V0zm0 8h12v6H56V8zM42 8h12v6H42V8zm0 16h12v6H42v-6zm14-8h12v6H56v-6zm14 0h12v6H70v-6zm0-16h12v6H70V0zM28 32h12v6H28v-6zM14 16h12v6H14v-6zM0 24h12v6H0v-6zm0 8h12v6H0v-6zm14 0h12v6H14v-6zm14 8h12v6H28v-6zm-14 0h12v6H14v-6zm28 0h12v6H42v-6zm14-8h12v6H56v-6zm0-8h12v6H56v-6zm14 8h12v6H70v-6zm0 8h12v6H70v-6zM14 24h12v6H14v-6zm14-8h12v6H28v-6zM14 8h12v6H14V8zM0 8h12v6H0V8z' fill='%23e7e7e7' fill-opacity='0.27' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        .compression{
            max-width: 200px;
            display: block;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .home_main{
            padding-top:20px;
        }
        .create_main {
            border:double;
            padding:30px;
            margin:30px;
        }
        .return {
            text-align: right;
        }
        h2 {
            border-bottom: solid 3px skyblue;
            position: relative;
        }
        h2:after {
            position: absolute;
            content: " ";
            display: block;
            border-bottom: solid 3px #ffc778;
            bottom: -3px;
            width: 30%;
        }
        h3{
            padding-top:15px;
        }
        /* メニューバー */
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
            margin: 20px 0px 20px 0px;
        }
        .cp_navi  > div > nav > div > ul {
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
        .cp_navi > div > nav > div > ul > li:hover > a > .caret {
            border-top-color: rgb( 255, 255, 255 );
        }
        .cp_navi > div > nav > div > ul > li > div {
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
        .cp_navi > div > nav > div > ul > li:hover > div {
            display: block;
            opacity: 1;
            visibility: visible;
        }
        .cp_navi > div > nav > div > ul > li > div ul > li {
            display: block;
        }
        .cp_navi > div > nav > div > ul > li > div ul > li > a {
            color: #ffffff;
            display: block;
            padding: 12px 0px 12px 12px;
            text-decoration: none;
        }
        .cp_navi > div > nav > div > ul > li > div ul > li:hover > a {
            background-color: rgba( 255, 255, 255, 0.1);
        }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="cp_navi">
            <div class="col-lg-12 mx-auto">
                    <nav class="navbar navbar-expand-md navbar-light bg-white">
                        <div class="container">
                            <ul class="navbar-nav mr-auto">
                                <li><a class="navbar-brand" href = {{ action('Member\HomeController@add') }}>
                                        Manege Office
                                        <span class="caret">
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href = {{ action('Member\HomeController@article_home') }}>
                                        回覧板
                                        <span class="caret">
                                        </span>
                                    </a>
                                    <div>
                                        <ul>
                                            <!-- <li>
                                                <a href = {{ action('Member\HomeController@article_home') }}>
                                                ホーム
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href = {{ action('Member\HomeController@article_create') }} >
                                                新規作成
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href =  >
                                        スケジュール
                                        <span class="caret">
                                        </span>
                                    </a>
                                    <div>
                                        <ul>
                                            <!-- <li>
                                                <a href =  >
                                                ホーム
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href = {{ action('Member\HomeController@schedule_create') }} >
                                                新規作成
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href = {{ action('Member\HomeController@request_home') }} >
                                        書類申請
                                        <span class="caret">
                                        </span>
                                    </a>
                                    <div>
                                        <ul>
                                            <!-- <li>
                                                <a href = {{ action('Member\HomeController@request_home') }} >
                                                ホーム
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href = {{ action('Member\HomeController@request_create') }} >
                                                    新規申請
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li>
                                    <a href={{ action('Member\HomeController@add') }}>
                                        {{ Auth::user()->name }}
                                        <span class="caret">
                                        </span>
                                    </a>
                                    <div>
                                        <ul>
                                            <li>
                                                <a href= "/ManegeOffice/public/member/home/logout" >
                                                    ログアウト
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        @yield('content')
        </div>
    </body>
</html>