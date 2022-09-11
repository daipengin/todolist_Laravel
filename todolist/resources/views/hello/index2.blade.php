@extends('layouts.helloapp')
@section('title','Index2')
@section('menubar')
    @parent
    インデックス
@endsection
@section('content')
<p>ここが本文</p>
<p>いろいろ記述できる</p>
<p>Controller value<br>'\message'={{ $message }}</p>
<p>ViewComposer value<br>'view_message'={{ $view_message }}</p>
@component('components.message')
    @slot('msg_title')
    CAUTION   
    @endslot
    @slot('msg_content')
    これはmessageの表示
    @endslot
@endcomponent

@include('components.message',['msg_title'=>'OK','msg_content'=>'サブです'])
<ul>
    @each('components.item', $data,'item')
</ul>

@endsection
@section('footer')
copyright 2022
@endsection
