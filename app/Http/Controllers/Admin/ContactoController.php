<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactoRequest;
use App\Models\User;
use Illuminate\Database\QueryException;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::paginate(10);
        return view('admin.contacto.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacto.create', ['users'=>User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {

        $this->users=User::all();
        $contacto=Contacto::create($request->all());
        return redirect()->route('admin.contacto.edit', $contacto->id)->with('success', 'Contacto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view('admin.contacto.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        return view('admin.contacto.edit', compact('contacto'), ['users'=>User::all()]);
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
        return back()->with('success', 'Contacto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        try {
            $contacto->delete();
            return back()->with('success', 'Contacto eliminado con éxito');        
        }catch (QueryException $e){
            return back()->with('error', 'No se puede eliminar el contacto porque está relacionado con otro registro.');
        }
    }
}
