<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


global $head,$style,$body,$end;
$head = '<html><head>';
$style = <<<EOF
<style>
body{font-size:16pt;color:#999;}
h1{
    font-size :100px;
    text-align:right;
    color:#eee;
    margin:-40px 0px -50px 0px;
}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag,$text){
    return "<{$tag}>" . $text . "</{$tag}>";
}



class HelloController extends Controller
{
    public function __invoke()
    {
        global $head,$style,$body,$end;
        $html = $head . tag('title','Hello/Single') . $style.$body
        . tag('h1','Single Action') . tag('p','this is Single Action').
        '<a href = "/hello/other"> go to Other page</a>' . $end;
        return $html;
    }

    public function index(Request $request,Response $response){
        global $head,$style,$body,$end;
        $html = $head . tag('title','Hello/Index') . $style.$body
        . tag('h1','Index') . tag('p','this is index').
        '<a href = "/hello/other"> go to Other page</a>' . 
        tag('h3','Request') . tag('pre',$request). 
        tag('h3','Response') . tag('pre',$response). 
        $end;
        $response ->setContent($html);
        return $html;
    }

    public function other(){
        global $head,$style,$body,$end;
        $html = $head . tag('title','Hello/Other') . $style.$body
        . tag('h1','Other') . tag('p','this is Other page').
        '<a href = "/hello"> go to Index page</a>' . $end;
        return $html;
    }



    public function enter($id = 'noname',$pass ='unknown'){
        return <<<EOF
<html>
<head>
<title>Hello/Enter</title>
<style>
body{font-size:16pt;color:#999;}
h1{
    font-size :100px;
    text-align:right;
    color:#eee;
    margin:-40px 0px -50px 0px;
}
</style>
</head>
<body>
    <h1>Enter</h1>
    <p>これはHelloコントローラーのEnterアクションです。</p>
    <ul>
        <li>Id: {$id}</li>
        <li>Pass: {$pass}</li>
    </ul>
</body>
</html>
EOF;
    }
}
