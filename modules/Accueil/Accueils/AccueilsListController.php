<?php

namespace Modules\Accueil\Accueils;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilsListController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Accueil_Accueils', __DIR__);
        return view('Modules_Accueil_Accueils::AccueilsListView');
    }
}
