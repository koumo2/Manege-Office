
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
        .max_30px{
            display: block;
            width:30px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .max_100px{
            display: block;
            width:100px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .max_150px{
            display: block;
            width: 150px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .max_200px{
            display: block;
            width: 200px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .max_250px{
            display: block;
            width: 250px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .max_300px{
            display: block;
            width: 300px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .home_main{
            padding-top:50px;
        }
        .create_main {
            border:double;
            padding:30px;
            margin:30px;
        }
        .return {
            text-align: right;
        }
        .form-horizontal {
            border:solid;
            border-color:#031de2;
        }
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
        h2 {
            border-bottom: solid 3px #cce4ff;
            position: relative;
        }

        h2:after {
            position: absolute;
            content: " ";
            display: block;
            border-bottom: solid 3px #5472cd;
            bottom: -3px;
            width: 20%;
        }
        main {
            margin:0 auto;
        }
        </style>
    </head>
    <body>
    <div class="col-md-10 mx-auto">
    <div class="cp_navi">
        <ul>
            <li><a href = {{ action('Member\HomeController@add') }}>Home</a></li>
            <li>
                <a href = {{ action('Member\HomeController@article_home') }}>回覧板 <span class="caret"></span></a>
                <div>
                    <ul>
                        <li><a href = {{ action('Member\HomeController@article_home') }} >ホーム</a></li>
                        <li><a href = {{ action('Member\HomeController@article_create') }} >新規作成</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href = {{ action('Member\HomeController@schedule_home') }} >スケジュール<span class="caret"></span></a>
                <div>
                    <ul>
                        <li><a href = {{ action('Member\HomeController@schedule_home') }} >ホーム</a></li>
                        <li><a href = {{ action('Member\HomeController@schedule_create') }} >新規作成</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href = {{ action('Member\HomeController@request_home') }} >書類申請<span class="caret"></span></a>
                <div>
                    <ul>
                        <li><a href = {{ action('Member\HomeController@request_home') }} >ホーム</a></li>
                        <li><a href = {{ action('Member\HomeController@request_create') }} >新規申請</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href={{ action('Member\HomeController@add') }}>ログイン者名<span class="caret"></span></a>
                <div>
                    <ul>
                        <li><a href= "/groupware/public/member/home/logout" >ログアウト</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    @yield('content')
    </div>
    </body>
</html>