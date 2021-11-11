<?php

namespace Modules\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// -- Object Controller Section
// use Modules\Module\Submodule\TemplateObjectController;

// -- Object API Section
// use Modules\Module\Submodule\TemplateObjectAPI;

// -- List Controller Section
// use Modules\Module\Submodule\TemplateListController;

class ArticleRoutes
{
    static public function ObjectsControllersRoutes() {
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

        // -- Object Controller Section
        // Route::get('/Module/Submodule', [TemplateObjectController::class, 'index']);
    }

    static public function ObjectsAPIsRoutes() {
        /*
        |--------------------------------------------------------------------------
        | API Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register API routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | is assigned the "api" middleware group. Enjoy building your API!
        |
        */

        // -- Object API Section
        // Route::apiResources([ '/Module/Submodule' => TemplateObjectAPI::class ]);
    }

    static public function ListsControllersRoutes() {
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

        // -- List Controller Section
        // Route::get('/Module/Submodule', [TemplateListController::class, 'index']);
    }
}
