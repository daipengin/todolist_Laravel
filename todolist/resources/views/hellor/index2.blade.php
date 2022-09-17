@extends('layouts.helloapp')
@section('title','Index2')
@section('menubar')
    @parent
    インデックス2バリデーション
@endsection
@section('content')
<p>ここが本文</p>
<p>いろいろ記述できる</p>

<p>{{$msg}}</p>
@if(count($errors)>0)
<p>入力に問題があります</p>
@endif
<form action = "/hellor/mes" method="post">
<table>
    @csrf
    @if($errors ->has('msg'))
        <tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>
    @endif
    <tr><th>Message: </th><td><input type = "text" name ="msg" value ="{{old('msg')}}"></td></tr>
    <tr><th></th><td><input type="submit" value = "send"></td></tr>
<!--
    <tr><th>name: </th><td><input type="text" name = "name" value="{{old('name')}}"></td></tr>
    <tr><th>mail: </th><td><input type="text" name = "mail" value="{{old('mail')}}"></td></tr>
    <tr><th>age: </th><td><input type="text" name = "age" value="{{old('age')}}"></td></tr>
    <tr><th></th><td><input type="submit" value = "send"></td></tr>
-->
</table>
</form>

@endsection
@section('footer')
copyright 2022
@endsection
