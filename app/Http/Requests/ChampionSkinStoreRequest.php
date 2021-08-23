<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ChampionSkinStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'image' => 'required|image',
            'champ_id' => 'required|exists:champions,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'É necessário preencher o nome',
            'image.required' => 'É necessário adicionar uma imagem',
            'champ_id.required' => 'É necessário associar um champion',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'validator' => $validator->errors(),
                    'msg' => 'Erro de validação.',
                ], 422
            )
        );
    }
}
