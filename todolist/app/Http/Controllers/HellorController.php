<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HellorController extends Controller
{
    public function index(Request $request){
        return view('hellor.index',['data'=>$request->data]);
    }

    public function index2(Request $request){
        if($request->hasCookie('msg')){
            $msg = 'Cookie: ' . $request->cookie('msg');
        }else{
            $msg = 'Cookieはありません';
        }
        return view('hellor.index2',['msg'=>$msg]);
    }

    public function post(Request $request){
        $validate_rule=[
            'msg'=>'required',
            /*'name'=>'required',
            'mail'=>'email',
            'age'=>'numeric|between:0,150',*/
        ];
        $this -> validate($request,$validate_rule);
        $msg = $request->msg;
        $response = response()->view('hellor.index2',['msg'=>'「'.$msg.'」をクッキーに保存しました。']);
        $response -> cookie('msg',$msg,100);
        return $response;
    }
}
