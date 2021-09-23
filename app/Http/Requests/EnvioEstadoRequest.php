<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnvioEstadoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'envio_id' => 'required',
            'estado_id' => 'required',
            'descripcion' => 'required',
        ];
    }
}
