<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ChampionSkillStoreRequest extends FormRequest
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
            'small_name' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string|',
            'champ_id' => 'required|exists:champions,id',
            'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'small_name.required' => 'É necessário preencher o small name',
            'name.required' => 'É necessário preencher o título',
            'description.required' => 'É necessário preencher a descrição',
            'champ_id.required' => 'É necessário preencher o id do champion',
            'image.required' => 'É necessário adicionar uma imagem da skill',
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
