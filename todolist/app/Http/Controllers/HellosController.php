<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HellosController extends Controller
{
    public function index($id='zero'){
        $date = [
            'msg'=>'これはコントローラーからのメッセージ',
            'msg2'=>'二つ目のメッセージ',
            'id'=>$id,
            'date' =>['one','two','three','four','five']
        ];
        return view('hello.index',$date);
    }

    public function query(Request $request){
        $date = [
            'msg'=>'これはコントローラーからのメッセージ',
            'msg2'=>'二つ目のメッセージ',
            'id'=>$request ->id
        ];
        return view('hello.index',$date);
    }

    public function post (Request $request){
        $msg = $request ->msg;
        $date = [
            'msg' => 'こんにちは'. $msg.'さん！',
            'msg2'=>'ここはPOSTのページ',
            'id'=>''

        ];
        return view('hello.index',$date);
    }
    
}
