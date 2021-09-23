<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagoEnvioRequest;
use App\Models\PagoEnvio;
use Illuminate\Http\Request;

class PagoEnvioController extends Controller
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
    public function store(PagoEnvio $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return \Illuminate\Http\Response
     */
    public function show(PagoEnvio $pagoEnvio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return \Illuminate\Http\Response
     */
    public function update(PagoEnvioRequest $request, PagoEnvio $pagoEnvio)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagoEnvio $pagoEnvio)
    {
        //
    }
}
