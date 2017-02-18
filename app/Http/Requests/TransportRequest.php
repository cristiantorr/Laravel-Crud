<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransportRequest extends FormRequest
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
          'vehicle'   => 'required',
          'choiceDay' => 'required',
          'price'     => 'required'
        ];
    }

     public function messages()
    {
        return [
          'vehicle.required'   => 'Vehiculo es requerido',
          'choiceDay.required' => 'El día es requerido',
          'price.required'     => 'Precio es requerido'
        ];
    }


}
