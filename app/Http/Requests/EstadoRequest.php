<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'descripcion' => 'required',
        ];
    }
}
