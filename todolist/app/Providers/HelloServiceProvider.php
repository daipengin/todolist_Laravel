<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class HelloServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        View::composer(
            /*'hello.index2',function($view){
                $view->with('view_message','composer message');
            }*/
            'hello.index2','App\Http\Composers\HelloComposer'
        );
    }
}
