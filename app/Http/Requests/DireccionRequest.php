<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DireccionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'required',
            'direccion' => 'required',
            'localidad' => 'required',
            'ciudad' => 'required',
            'distrito' => 'required',
            'pais' => 'required',
        ];
    }
}
