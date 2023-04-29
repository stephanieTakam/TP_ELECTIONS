<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required',
            'num_cni' => 'required|max:9|min:9',
            'age' => 'required|max:3',
            'sexe' => 'required',
            'statut' => 'required',
            'id_region' => 'required',
            'login' => 'required',
            'password' => 'required|min:8',
            'email' => 'required',
            'telephone' => 'required|min:9'
        ];
    }
}
