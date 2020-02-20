<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>速習Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body>
        <table class="table">
            <tr>
                <th>書名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>刊行日</th>
            </tr>
            @foreach ($recodes as $recode)
            <tr>
                <td>{{$recode->title}}</td>
                <td>{{$recode->price}}円</td>
                <td>{{$recode->publisher}}</td>
                <td>{{$recode->published}}</td>
            </tr>

            @endforeach
        </table>
    </body>

</html>
