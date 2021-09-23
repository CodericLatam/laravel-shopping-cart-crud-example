<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnvioTipoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'descripcion' => 'required',
        ];
    }
}
