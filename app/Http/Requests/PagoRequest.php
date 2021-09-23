<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'descripcion' => 'required',
        ];
    }
}
