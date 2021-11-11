<?php

namespace Modules\Entite\Entite;

use App\Http\Controllers\Controller;
use Modules\Entite\Entite\EntiteObjectModel;
use Illuminate\Http\Request;

class EntiteObjectAPI extends Controller
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
    public function show(EntiteObjectModel $template)
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
    public function update(Request $request, EntiteObjectModel $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntiteObjectModel $template)
    {
        //
    }
}
