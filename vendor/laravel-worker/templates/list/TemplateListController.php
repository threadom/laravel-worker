<?php

namespace Modules\Module\Submodule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateListController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Module_Submodule', __DIR__);
        return view('Modules_Module_Submodule::TemplateListView');
    }
}
