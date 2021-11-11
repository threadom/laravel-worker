<?php

namespace Modules\Entite\Entites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntitesListController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_Entites', __DIR__);
        return view('Modules_Entite_Entites::EntitesListView');
    }
}
