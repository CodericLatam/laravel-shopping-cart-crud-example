<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function store(Request $request)
    {
        $request->validate([
            'envio_id' => 'required',
            'pago_id' => 'required',
            'valor' => 'required',
        ]);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return \Illuminate\Http\Response
     */
    public function edit(PagoEnvio $pagoEnvio)
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
    public function update(Request $request, PagoEnvio $pagoEnvio)
    {
        $request->validate([
            'envio_id' => 'required',
            'pago_id' => 'required',
            'valor' => 'required',
        ]);
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
