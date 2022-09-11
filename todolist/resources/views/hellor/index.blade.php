@extends('layouts.helloapp')
@section('title','Index2')
@section('menubar')
    @parent
    インデックス
@endsection
@section('content')
<p>ここが本文</p>
<p>いろいろ記述できる</p>
<table>
    @foreach ($data as $item)
        <tr>
            <th>{{ $item['name'] }}</th>
            <td>{{ $item['mail'] }}</td>
        </tr>
    @endforeach
</table>


@endsection
@section('footer')
copyright 2022
@endsection
