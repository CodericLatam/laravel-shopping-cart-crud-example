<?php

namespace App\Http\Controllers;

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
        $direccions = Direccion::all();
        return view('direccion.index', compact('direccions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direccion.create');
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
            'direccion' => 'required',
            'localidad' => 'required',
            'ciudad' => 'required',
            'distrito' => 'required',
            'pais' => 'required',
        ]);
        Direccion::create($request->all());
        return redirect()->route('direccion.index')->with('success', 'Direccion creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion)
    {
        return view('direccion.show', compact('direccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Direccion $direccion)
    {
        return view('direccion.edit', compact('direccion'));
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
            'direccion' => 'required',
            'localidad' => 'required',
            'ciudad' => 'required',
            'distrito' => 'required',
            'pais' => 'required',
        ]);
        $direccion->update($request->all());
        return redirect()->route('direccion.index')->with('success', 'Direccion actualizada con exito');
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
        return redirect()->route('direccion.index')->with('success', 'Direccion eliminada con exito');
    }
}
