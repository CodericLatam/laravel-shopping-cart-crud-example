<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoEnvioRequest extends FormRequest
{
    public function rules()
    {
        return [
            'envio_id' => 'required',
            'pago_id' => 'required',
            'valor' => 'required',
        ];
    }
}
