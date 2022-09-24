@extends('layouts.dbapp')
@section('title','Edit')
@section('menubar')
    @parent
    更新ページ
@endsection
@section('content')
<form action="/database/2/edit" method="post">
<table>
    @csrf
    <input type="hidden" name ="id" value="{{$form->id}}">
    <tr><th>Name:</th><td><input type="text" name = "name"></td></tr>
    <tr><th>Mail:</th><td><input type="text" name = "mail"></td></tr>
    <tr><th>Age :</th><td><input type="text" name = "age"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
</table>


@endsection
@section('footer')
copyright 2022
@endsection
