@extends('layouts.base')
@section('title','フォームの基本')
@section('main')
    <form method="POST" action="/ctrl/result">
    @csrf
    <label id="name">名前：</label>
    <input type="text" value="" id="name" name="name">
        <input type="submit" value="送信">
    <p>{{$result}}</p>
    </form>
@endsection