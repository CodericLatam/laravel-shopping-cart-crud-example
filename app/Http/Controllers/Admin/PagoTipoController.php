<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'descripcion' => 'required',
        ]);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return \Illuminate\Http\Response
     */
    public function edit(PagoTipo $pagoTipo)
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
    public function update(Request $request, PagoTipo $pagoTipo)
    {
        $request->validate([
            'descripcion' => 'required',
        ]);
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
