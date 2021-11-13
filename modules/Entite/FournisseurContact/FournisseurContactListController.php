<?php

namespace Modules\Entite\FournisseurContact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FournisseurContactListController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_FournisseurContact', __DIR__);
        return view('Modules_Entite_FournisseurContact::FournisseurContactListView');
    }
}