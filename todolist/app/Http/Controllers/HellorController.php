<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HellorController extends Controller
{
    public function index(Request $request){
        return view('hellor.index',['data'=>$request->data]);
    }
}
