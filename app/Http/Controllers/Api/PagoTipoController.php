<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagoTipoRequest;
use App\Models\PagoTipo;
use Illuminate\Http\Request;

class PagoTipoController extends Controller
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
    public function store(PagoTipoRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return \Illuminate\Http\Response
     */
    public function show(PagoTipo $pagoTipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return \Illuminate\Http\Response
     */
    public function update(PagoTipoRequest $request, PagoTipo $pagoTipo)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagoTipo $pagoTipo)
    {
        //
    }
}
