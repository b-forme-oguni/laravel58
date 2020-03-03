<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body>
        <h1>@yield('title')</h1>
        <img src="https://wings.msn.to/image/wings.jpg" alt="ロゴ">
        <hr>
        @section('menuber')
        <p>既定のコンテンツです。</p>
        @show
        <hr>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
        <p>Copyright(c) 1998-2019,WINGS Project.All Right Reserved</p>
    </body>

</html>
