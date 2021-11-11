<?php

namespace Modules\Entite\SousTraitant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SousTraitantObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_SousTraitant', __DIR__);
        return view('Modules_Entite_SousTraitant::SousTraitantObjectView');
    }
}
