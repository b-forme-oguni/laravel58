@extends('layouts.base')

@section('main')
<p>ここが本文のコンテンツです。</p>
<table>
    @foreach ($data as $item)
    <tr>
        <th>{{$item['name']}}</th>
        <td>{{$item['mail']}}</td>
    </tr>
    @endforeach
</table>
@endsection
