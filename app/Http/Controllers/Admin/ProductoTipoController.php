<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductoTipoRequest;
use App\Models\ProductoTipo;
use Illuminate\Http\Request;

class ProductoTipoController extends Controller
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
    public function store(ProductoTipoRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return \Illuminate\Http\Response
     */
    public function show(ProductoTipo $productoTipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoTipo $productoTipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoTipoRequest $request, ProductoTipo $productoTipo)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoTipo $productoTipo)
    {
        //
    }
}
