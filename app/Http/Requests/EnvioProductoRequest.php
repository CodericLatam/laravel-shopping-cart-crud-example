<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnvioProductoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'producto_id' => 'required',
            'envio_id' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'subtotal' => 'required',
        ];
    }
}
