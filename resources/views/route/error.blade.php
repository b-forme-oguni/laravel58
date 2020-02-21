<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>エラーページ</title>
    </head>

    <body>
        <p class="alert">ページが見つかりませんでした。</p>
        <ul>
            @foreach ($collection as $item)
            <li>{{$item}}</li>
            @endforeach
        </ul>
    </body>

</html>
