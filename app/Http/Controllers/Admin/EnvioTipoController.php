<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnvioTipoRequest;
use App\Models\EnvioTipo;
use Illuminate\Http\Request;

class EnvioTipoController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnvioTipoRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return \Illuminate\Http\Response
     */
    public function show(EnvioTipo $envioTipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return \Illuminate\Http\Response
     */
    public function edit(EnvioTipo $envioTipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return \Illuminate\Http\Response
     */
    public function update(EnvioTipoRequest $request, EnvioTipo $envioTipo)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnvioTipo $envioTipo)
    {
        //
    }
}
