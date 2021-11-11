<?php

namespace Modules\Entite\Fournisseur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FournisseurObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_Fournisseur', app_path(__dir__));
        return view('Modules_Entite_Fournisseur::FournisseurObjectView');
    }
}
