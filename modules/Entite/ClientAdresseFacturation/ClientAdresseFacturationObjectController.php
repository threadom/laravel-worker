<?php

namespace Modules\Entite\ClientAdresseFacturation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientAdresseFacturationObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_ClientAdresseFacturation', app_path(__dir__));
        return view('Modules_Entite_ClientAdresseFacturation::ClientAdresseFacturationObjectView');
    }
}
