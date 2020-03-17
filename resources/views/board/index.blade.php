@extends('layouts.helloapp')

@section('title','Board.index')

@section('menuber')
    @parent
    ボード・ページ
@endsection

@section('content')
<table>
    <tr>
        <th>Data</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
    @endforeach
</table>

@endsection
@section('footer')
copyright 2017 tuyno.
@endsection
