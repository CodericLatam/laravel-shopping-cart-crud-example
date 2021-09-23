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
            'foto' => 'required',
            'descripcion' => 'required',
            'unidad' => 'required',
            'precio' => 'required',
        ];
    }
}
