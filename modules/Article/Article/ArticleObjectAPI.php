<?php

namespace Modules\Article\Article;

use App\Http\Controllers\Controller;
use Modules\Article\Article\ArticleObjectModel;
use Illuminate\Http\Request;

class ArticleObjectAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleObjectModel $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleObjectModel $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleObjectModel $template)
    {
        //
    }
}
