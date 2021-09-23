<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $envios = Envio::paginate(10);
        return view('admin.envio.index', compact('envios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.envio.create');
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

        $envio=Envio::create($request->all());
        return redirect()->route('admin.envio.edit', $envio->id)->with('status', 'Envio creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function show(Envio $envio)
    {
        return view('admin.envio.show', compact('envio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function edit(Envio $envio)
    {
        return view('admin.envio.edit', compact('envio'));
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

        $envio->update($request->all());
        return redirect()->back()->with('status', 'Envio actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Envio  $envio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Envio $envio)
    {
        $envio->delete();
        return back()->with('status', 'Envio eliminado con éxito');
    }
}
