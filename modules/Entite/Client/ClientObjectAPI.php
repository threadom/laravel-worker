<?php

namespace Modules\Entite\Client;

use App\Http\Controllers\Controller;
use Modules\Entite\Client\ClientObjectModel;
use Illuminate\Http\Request;

class ClientObjectAPI extends Controller
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
    public function show(ClientObjectModel $template)
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
    public function update(Request $request, ClientObjectModel $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientObjectModel $template)
    {
        //
    }
}
