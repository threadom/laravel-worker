<?php

namespace Modules\Entite\Entite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntiteObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_Entite', __DIR__);
        return view('Modules_Entite_Entite::EntiteObjectView');
    }
}
