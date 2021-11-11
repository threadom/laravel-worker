<?php

namespace Modules\Article\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesListController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Article_Articles', __DIR__);
        return view('Modules_Article_Articles::ArticlesListView');
    }
}
