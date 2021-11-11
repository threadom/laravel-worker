<?php

namespace Modules\Entite\ClientAdresseLivraison;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientAdresseLivraisonListController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_ClientAdresseLivraison', __DIR__);
        return view('Modules_Entite_ClientAdresseLivraison::ClientAdresseLivraisonListView');
    }
}
