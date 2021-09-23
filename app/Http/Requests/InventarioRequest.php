<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventarioRequest extends FormRequest
{
    public function rules()
    {
        return [
            'producto_id' => 'required',
            'inventario' => 'required',
            'costo' => 'required',
        ];
    }
}
