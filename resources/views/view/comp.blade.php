@extends('layouts.base')
@section('title','共通レイアウトの基本')

{{-- セクション’main'の中を入れ替え --}}
@section('main')

    {{-- ’alert’コンポーネントを呼び出し。’type’に値を挿入 --}}
    @component('components.alert',['type' => 'success'])

    {{-- alert_titleの内容を記述 --}}
    @slot('alert_title')
    初めてのコンポーネント
    @endslot
    {{-- 何故か$slotの値に、下記文章が入る --}}
    コンポーネントは普通のビューと同じようにblade.phpファイルで定義できます。
    @endcomponent

@endsection
