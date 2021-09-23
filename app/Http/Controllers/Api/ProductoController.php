<?php

namespace App\Http\Controllers\Api;

use App\Events\Crud\ProductoEvent;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductoCollection;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new ProductoCollection(Producto::paginate(100)))->response()->setStatusCode(200);
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
            'producto_tipo_id' => 'required',
            'nombre' => 'required',
            'foto' => 'required',
            'descripcion' => 'required',
            'unidad' => 'required',
            'precio' => 'required',
        ]);
        
        $producto = Producto::create($request->all());

        //event(new ProductoEvent('create', $producto));
        return response()->json(['message' => 'Producto creado con exito!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return new ProductoResource($producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'producto_tipo_id' => 'required',
            'nombre' => 'required',
            'foto' => 'required',
            'descripcion' => 'required',
            'unidad' => 'required',
            'precio' => 'required',
        ]);

        $producto->update($request->all());
        //event(new ProductoEvent('update', $producto));
        return response()->json(['message' => 'Producto actualizado con exito!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        //event(new ProductoEvent('delete', $producto));
        return response()->json(['message' => 'Producto eliminado con exito!'], 200);
    }
}
