<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactoRequest;
use App\Http\Resources\ContactoCollection;
use App\Http\Resources\ContactoResource;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new ContactoCollection(Contacto::paginate(100)))->response()->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
        $contacto=Contacto::create($request->all());
        return response()->json(['message' => 'Contacto creado con exito!', 'data' => $contacto], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return new ContactoResource($contacto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(ContactoRequest $request, Contacto $contacto)
    {
        $contacto->update($request->all());
        return response()->json(['message' => 'Contacto actualizado con exito!', 'data' => $contacto], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return response()->json(['message' => 'Contacto eliminado con exito!'], 200)
        ->setStatusCode(201);
    }
}
