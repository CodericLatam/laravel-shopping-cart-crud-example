<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EnvioCollection;
use App\Models\Envio;
use Illuminate\Http\Request;

class EnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new EnvioCollection(Envio::paginate(100)))->response()->setStatusCode(200);
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
            
            'user_id' => 'required',
            'envio_tipo_id' => 'required',
            'pago_tipo_id' => 'required',
            'envio_direccion' => 'required',
            'pago_direccion' => 'required',
            'precio' => 'required',
            'costo_envio' => 'required',
            'descuento' => 'required',
            'total' => 'required',
        ]);

        $envio = Envio::create($request->all());
        return response()->json(['message' => 'Envio crreado con éxito', 'data' => $envio], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function show(Envio $envio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Envio $envio)
    {
        $request->validate([
            
            'user_id' => 'required',
            'envio_tipo_id' => 'required',
            'pago_tipo_id' => 'required',
            'envio_direccion' => 'required',
            'pago_direccion' => 'required',
            'precio' => 'required',
            'costo_envio' => 'required',
            'descuento' => 'required',
            'total' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Envio $envio)
    {
        //
    }
}
