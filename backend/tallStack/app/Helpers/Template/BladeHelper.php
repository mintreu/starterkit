<?php

namespace App\Helpers\Template;



use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class BladeHelper
{


    /**
     * @param string $route
     * @param string $ifTrue
     * @param string $ifFalse
     * @return bool|string
     */
    public static function activeUrl(string $route, string $ifTrue='', string $ifFalse=''):bool|string
    {
        if(Route::has($route))
        {
            if(empty($ifTrue) || empty($ifFalse))
            {
                return Route::is($route);
            }else{
                return Route::is($route) ? $ifTrue : $ifFalse;
            }
        }else{
            if(empty($ifTrue) || empty($ifFalse))
            {
                return Request::routeIs($route);
            }else{
                return Request::is($route) ? $ifTrue : $ifFalse;
            }
        }
    }



}
