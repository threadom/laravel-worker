<?php

namespace Modules\Entite\Fournisseur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FournisseurListController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_Fournisseur', __DIR__);
        return view('Modules_Entite_Fournisseur::FournisseurListView');
    }
}