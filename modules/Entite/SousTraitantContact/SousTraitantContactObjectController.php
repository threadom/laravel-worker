<?php

namespace Modules\Entite\SousTraitantContact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SousTraitantContactObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_SousTraitantContact', app_path(__dir__));
        return view('Modules_Entite_SousTraitantContact::SousTraitantContactObjectView');
    }
}
