<table>
    @foreach ($items as $item)

    <tr>
        <th>message: </th>
        <td>{{$item->message}}</td>
    </tr>
    <tr>
        <th>url: </th>
        <td>{{$item->url}}</td>
    </tr>
    @endforeach
</table>
