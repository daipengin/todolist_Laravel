<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HellorController;
use App\Http\Controllers\HellosController;
use App\Http\Middleware\HelloMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//4リクエストレスポンス
Route::get('hellor',[HellorController::class,'index'])->middleware(HelloMiddleware::class);
Route::get('hellor/mes',[HellorController::class,'index2']);
Route::post('hellor/mes',[HellorController::class,'post']);


//3.ビューとテンプレート
Route::get('hellos/id/{id?}',[HellosController::class,'index3']);
Route::get('hellos/index2',[HellosController::class,'index2']);
Route::get('hellos/query',[HellosController::class,'query']);
Route::post('hellos',[HellosController::class,'post']);



//2.ルーティングとコントローラー

Route::get('hello/enter/{id?}/{pass?}',[HelloController::class,'enter']);
Route::get('hello',[HelloController::class,'index']);
Route::get('hello/other',[HelloController::class,'other']);
Route::get('hello/single',HelloController::class);


$htmls = <<< EOM
<html>
<head>
<title>Hello</title>
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
<h1>Hello</h1>
<p>this is sample</p>
</body>
</html>
EOM;


Route::get('/hello/test', function () use($htmls) {
    return $htmls;
});

Route::get('/hello/test_msg/{msg?}', function ($msg='no message')  {
    return $htmls= <<< EOM
    <html>
    <head>
    <title>Hello</title>
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
    <h1>Hello</h1>
    <p>this is sample</p>
    <p>{$msg}</p>
    </body>
    </html>
EOM;;
});







