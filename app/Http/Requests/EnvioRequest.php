<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnvioRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'required',
            'envio_tipo_id' => 'required',
            'pago_tipo_id' => 'required',
            'envio_direccion' => 'required',
            'pago_direccion' => 'required',
            'precio' => 'required',
            'costo_envio' => 'required',
            'descuento' => 'required',
            'total' => 'required',
        ];
    }
}
