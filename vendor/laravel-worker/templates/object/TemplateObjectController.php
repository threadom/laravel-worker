<?php

namespace Modules\Module\Submodule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Module_Submodule', app_path(__dir__));
        return view('Modules_Module_Submodule::TemplateObjectView');
    }
}
