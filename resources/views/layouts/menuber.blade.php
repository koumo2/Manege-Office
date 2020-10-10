
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <style>
        ul.topnav {
        overflow: hidden;
        margin: 0;
        padding: 0;
        list-style-type: none;
        background-color: #1b2538;
        }
        ul.topnav li {
        float: left;
        }
        ul.topnav li a {
        display: block;
        padding: 14px 16px;
        text-align: center;
        text-decoration: none;
        color: white;
        }
        ul.topnav li a:hover:not(.active) {
        background-color: #a9bce2;
        }
        ul.topnav li a.active {
        background-color: #da3c41;
        }
        ul.topnav li.right {
        float: right;
        }
        @media screen and (max-width: 480px) {
        ul.topnav li.right, ul.topnav li {
        float: none;
        }
        }
        </style>
    </head>
    <body>
        <ul class="topnav">
            <li><a class="active" href="#home">ホーム</a></li>
            <li><a href="#article">回覧板</a></li>
            <li><a href="#schedule">スケジュール</a></li>
            <li><a href="#request">書類申請</a></li>
            <li class="right"><a href="#setting">設定</a></li>
    　　</ul>
      @yield('content')
    </body>
</html>