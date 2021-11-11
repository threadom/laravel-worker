<?php

namespace Modules\Entite\SousTraitantContact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateObjectController extends Controller
{
    public function index() {
        // view()->addNamespace('my_views', app_path('custom_views')); // let's add /app/custom_views via namespace
        // view('my_views::some.view.name') // then: /app/custom_views/some/view/name.blade.php
        // --
        // view()->addLocation(app_path('cutom_views')); // OR via path
        // view('some.view.name') // // then: search in /app/views first, then custom locations
        return view('modules/Module/Submodule/TemplateObjectView');
    }
}
