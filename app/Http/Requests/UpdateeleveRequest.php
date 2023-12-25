<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateeleveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|min:3|max:50',
            'prenom' => 'required|string|min:3|max:50',
            'date_naissance' => 'required|string|regex:/^\d{4}-\d{2}-\d{2}$/',
            'classe' => 'required|string|in:6eme,5eme,4eme,3eme,2nd,1ere,Tle',
            'sexe' => 'required||in:Masculin,Féminin',
        ];
    }
}
