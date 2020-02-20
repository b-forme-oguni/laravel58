@extends('layouts.base')

@section('main')
    @include('components.alert',[
        'type' => 'success',
        'alert_title' => 'はじめてのコンポーネント',
        'slot' => 'コンポーネントは普通のビューと同じように・・・'
    ])
@endsection