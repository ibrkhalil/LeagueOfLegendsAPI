<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class WebChampionStoreRequest extends FormRequest
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
            'name' => 'unique:champions|required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'role_id' => 'required|exists:champion_roles,id',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'É necessário preencher o nome',
            'title.required' => 'É necessário preencher o título',
            'description.required' => 'É necessário preencher a descrição',
            'image.required' => 'É necessário adicionar uma imagem',
            'role_id.required' => 'É necessário adicionar um role'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->redirectTo('champion/create')->withErrors($validator)
        );
    }
}