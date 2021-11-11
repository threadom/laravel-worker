<?php

namespace Modules\Article\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleObjectController extends Controller
{
    public function index() {
        view()->addNamespace('Modules_Article_Article', __DIR__);
        return view('Modules_Article_Article::ArticleObjectView');
    }
}
