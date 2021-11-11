<?php

namespace Modules;

use Illuminate\Support\Facades\Route;

class ModulesRoutes
{
    static public function WebRoutes()
    {
        $json = json_decode(file_get_contents(__DIR__.'/ModulesRoutes.json'),true);
        $routes = $json['WebRoutes'];

        foreach($routes as $key => $route) {
            Route::get($key, [$route, 'index']);
        }
    }

    static public function APIRoutes()
    {
        $json = json_decode(file_get_contents(__DIR__.'/ModulesRoutes.json'),true);
        $routes = $json['APIRoutes'];

        foreach($routes as $key => $route) {
            Route::get($key, [$route, 'index']);
        }
    }
}
