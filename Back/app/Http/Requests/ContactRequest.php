<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'state_id'      => 'required|exists:states,id',
            'name'          => 'required|string',
            'email'         => 'required|string',
            'phone'         => 'required|string',
            'address'       => 'required|string',
            'number'        => 'required|string',
            'neighborhood'  => 'required|string',
            'city'          => 'required|string',
            'cep'           => 'required|string'
        ];
    }
}
