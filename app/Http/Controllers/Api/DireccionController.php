<?php

namespace App\Http\Controllers\Api;

use App\Events\Crud\DireccionEvent;
use App\Http\Controllers\Controller;
use App\Http\Resources\DireccionCollection;
use App\Http\Resources\DireccionResource;
use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new DireccionCollection(Direccion::paginate(100)))->response()->setStatusCode(200);
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
            'direccion' => 'required',
            'localidad' => 'required',
            'ciudad' => 'required',
            'distrito' => 'required',
            'pais' => 'required',
        ]);
        $direccion=Direccion::create($request->all());
        return response()->json(['message' => 'Dirección creado con exito!', 'data' => $direccion], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion)
    {
        return $direccion;
        return (new DireccionResource($direccion))->response()->setStatusCode(200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direccion $direccion)
    {
        $request->validate([
            'user_id' => 'required',
            'direccion' => 'required',
            'localidad' => 'required',
            'ciudad' => 'required',
            'distrito' => 'required',
            'pais' => 'required',
        ]);
        $direccion->update($request->all());
        return response()->json(['message' => 'Dirección actualizado con exito!', 'data' => $direccion], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion)
    {
        $direccion->delete();
        return response()->json(['message' => 'Dirección eliminada con exito!'], 200);
    }
}
