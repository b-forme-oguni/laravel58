@extends('layouts.base')

@section('main')
<p>ここが本文のコンテンツです。</p>
<p>Controller value <br>'message' = {{$message}}</p>
<p>ViewComposer value <br>'view_message' = {{$view_message}}</p>
@endsection
