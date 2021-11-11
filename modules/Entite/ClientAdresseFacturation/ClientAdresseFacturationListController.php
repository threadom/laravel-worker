<?php

namespace Modules\Entite\ClientAdresseFacturation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientAdresseFacturationListController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_ClientAdresseFacturation', __DIR__);
        return view('Modules_Entite_ClientAdresseFacturation::ClientAdresseFacturationListView');
    }
}
