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
                <th>値</th>
                <th>index</th>
                <th>iteration</th>
                <th>count</th>
                <th>first</th>
                <th>last</th>
                <th>even</th>
                <th>odd</th>
                <th>depth</th>
            </tr>
            @foreach ($weeks as $week)
            <tr>
                <td>{{$week}}</td>
                <td>{{$loop->index}}円</td>
                <td>{{$loop->iteration}}</td>
                <td>{{$loop->count}}</td>
                <td>{{$loop->first}}</td>
                <td>{{$loop->last}}</td>
                <td>{{$loop->even}}</td>
                <td>{{$loop->odd}}</td>
                <td>{{$loop->depth}}</td>
            </tr>

            @endforeach
        </table>
    </body>

</html>
