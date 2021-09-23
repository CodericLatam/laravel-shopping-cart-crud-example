<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoTipoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'descripcion' => 'required',
        ];
    }
}
