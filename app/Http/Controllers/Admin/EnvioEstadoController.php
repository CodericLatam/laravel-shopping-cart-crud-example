<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnvioEstadoRequest;
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
        $envio_estados = EnvioEstado::paginate(10);
        return view('admin.envio_estados.index', compact('envio_estados'));
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
    public function store(EnvioEstadoRequest $request)
    {
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return \Illuminate\Http\Response
     */
    public function edit(EnvioEstado $envioEstado)
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
    public function update(EnvioEstadoRequest $request, EnvioEstado $envioEstado)
    {
        //
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
