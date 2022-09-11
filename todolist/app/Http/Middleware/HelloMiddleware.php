<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {   
        $data=[
            ['name'=>'tarou','mail'=>'tarou@yamada'],
            ['name'=>'jiro','mail'=>'jiro@yamada'],
            ['name'=>'sabu','mail'=>'sabu@yamada']
        ];

        $request ->merge(['data'=>$data]);
        return $next($request);
    }
}
