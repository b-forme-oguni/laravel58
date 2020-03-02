@extends('layouts.base')

@section('main')
<p>{{$msg}}</p>
@if (count($errors) > 0)
<p>入力に問題があります。再入力して下さい。</p>
@endif
<table>
    <form action="/hello" method="post">
        {{-- {{ csrf_field() }} --}}

        {{-- neme属性（’name’）がエラーの場合のメッセージ表示 --}}
        @if ($errors->has('name'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('name')}}</td>
        </tr>
        @endif
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>

        {{-- neme属性（’mail’）がエラーの場合のメッセージ表示 --}}
        @if ($errors->has('mail'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('mail')}}</td>
        </tr>
        @endif
        <tr>
            <th>mail: </th>
            <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>

        {{-- neme属性（’age’）がエラーの場合のメッセージ表示 --}}
        @if ($errors->has('age'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('age')}}</td>
        </tr>
        @endif
        <tr>
            <th>age: </th>
            <td><input type="text" name="age" value="{{old('age')}}"></td>
        </tr>
        <tr>
            <th>送信: </th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
</table>
@endsection
