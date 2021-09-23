<?php

namespace App\Http\Controllers\Admin;

use App\Models\Direccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DireccionRequest;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccions = Direccion::paginate(10);
        return view('admin.direccion.index', compact('direccions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.direccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DireccionRequest $request)
    {
        $request->validate([
        ]);
        $direccion=Direccion::create($request->all());
        return redirect()->route('admin.direccion.edit', $direccion->id)->with('success', 'Direccion creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion)
    {
        return view('admin.direccion.show', compact('direccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Direccion $direccion)
    {
        return view('admin.direccion.edit', compact('direccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(DireccionRequest $request, Direccion $direccion)
    {
        $direccion->update($request->all());
        return redirect()->route('admin.direccion.index')->with('success', 'Direccion actualizada con exito');
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
        return redirect()->route('admin.direccion.index')->with('success', 'Direccion eliminada con exito');
    }
}
