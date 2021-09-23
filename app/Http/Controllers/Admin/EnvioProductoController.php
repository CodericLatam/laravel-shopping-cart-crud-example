<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnvioProductoRequest;
use App\Models\EnvioProducto;
use Illuminate\Http\Request;

class EnvioProductoController extends Controller
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
    public function store(EnvioProductoRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return \Illuminate\Http\Response
     */
    public function show(EnvioProducto $envioProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(EnvioProducto $envioProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return \Illuminate\Http\Response
     */
    public function update(EnvioProductoRequest $request, EnvioProducto $envioProducto)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnvioProducto $envioProducto)
    {
        //
    }
}
