<?php

namespace Modules\Entite\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Entite_Client', __DIR__);
        return view('Modules_Entite_Client::ClientObjectView');
    }
}