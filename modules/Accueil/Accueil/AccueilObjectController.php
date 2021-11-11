<?php

namespace Modules\Accueil\Accueil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Accueil_Accueil', app_path(__dir__));
        return view('Modules_Accueil_Accueil::AccueilObjectView');
    }
}
