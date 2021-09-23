<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EnvioEstado;
use Illuminate\Http\Request;

class EnvioEstadoController extends Controller
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
        $request->validate([
            'envio_id' => 'required',
            'estado_id' => 'required',
            'descripcion' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return \Illuminate\Http\Response
     */
    public function show(EnvioEstado $envioEstado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EnvioEstado $envioEstado)
    {
        $request->validate([
            'envio_id' => 'required',
            'estado_id' => 'required',
            'descripcion' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnvioEstado $envioEstado)
    {
        //
    }
}
