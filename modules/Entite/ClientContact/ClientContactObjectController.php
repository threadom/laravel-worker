<?php

namespace Modules\Entite\ClientContact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientContactObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_ClientContact', app_path(__dir__));
        return view('Modules_Entite_ClientContact::ClientContactObjectView');
    }
}
