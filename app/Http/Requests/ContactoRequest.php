<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ];
    }
}
