<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'producto_tipo_id' => 'required',
            'nombre' => 'required',
            'foto' => 'nullable|mimes:jpeg,png|max:1014',
            'descripcion' => 'required',
            'unidad' => 'required',
            'precio' => 'required',
        ];
    }
}
