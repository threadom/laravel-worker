<?php

namespace Modules\Accueil\Accueil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Accueil_Accueil', __DIR__);
        return view('Modules_Accueil_Accueil::AccueilObjectView');
    }
}
