<?php

namespace Modules\Entite\ClientContact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientContactObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_ClientContact', __DIR__);
        return view('Modules_Entite_ClientContact::ClientContactObjectView');
    }
}
