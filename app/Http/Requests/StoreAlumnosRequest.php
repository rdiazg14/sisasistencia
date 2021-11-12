<?php

namespace App\Http\Requests;

use App\Models\Alumnos;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;

class StoreAlumnosRequest extends FormRequest
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

    // public function __construct(ValidationFactory $validationFactory)
    // {

    //      $validationFactory->extend(
    //         'foo',
    //         function ($attribute, $value, $parameters) {
    //             return 'foo' === 66666666;
    //         },
    //         'Sorry, it failed foo validation!'
    //     );

    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' =>['required','max:8','min:8','custom_dni']
        ];
    }

    public function withValidator($validator)
    {
        $validator->addExtension('custom_dni', function ($attribute, $value, $parameters, $validator) {
            $nombre_bd= Alumnos::select('nombre')->where('dni', 'LIKE', '%' . $value . '%')->limit(1)->value('nombre');            
            return strlen($nombre_bd) > 1;
        });

        $validator->addReplacer('custom_dni', function ($message, $attribute, $rule, $parameters, $validator) {
            return __("El DNI no existe", compact('attribute'));
        });
    }

}
