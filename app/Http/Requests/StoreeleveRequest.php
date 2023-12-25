<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreeleveRequest extends FormRequest
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
            
            // 'messages' => [
            //     'nom.required' => 'Le champ nom est requis.',
            //     'nom.string' => 'Le champ nom doit être une chaîne de caractères.',
            //     'nom.min' => 'Le champ nom doit contenir au moins :min caractères.',
            //     'nom.max' => 'Le champ nom ne peut pas dépasser :max caractères.',
                
            //     'prenom.required' => 'Le champ prénom est requis.',
            //     'prenom.string' => 'Le champ prénom doit être une chaîne de caractères.',
            //     'prenom.min' => 'Le champ prénom doit contenir au moins :min caractères.',
            //     'prenom.max' => 'Le champ prénom ne peut pas dépasser :max caractères.',
                
            //     'date_naissance.required' => 'Le champ date de naissance est requis.',
            //     'date_naissance.string' => 'Le champ date de naissance doit être une chaîne de caractères.',
            //     'date_naissance.regex' => 'Le format de la date de naissance est incorrect. Utilisez le format YYYY-MM-DD.',
                
            //     'classe.required' => 'Le champ classe est requis.',
            //     'classe.string' => 'Le champ classe doit être une chaîne de caractères.',
            //     'classe.in' => 'La classe spécifiée n\'est pas valide.',
                
            //     'sexe.required' => 'Le champ sexe est requis.',
            //     'sexe.in' => 'La valeur du champ sexe n\'est pas valide.',
            // ],
        ];



    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => true,
            'message' => 'erreur de validation',
            'errorLists' => $validator->errors(),
        ]));
    }

    public function messages()
    {
        return [
            
                'nom.required' => 'Le champ nom est requis.',
                'nom.string' => 'Le champ nom doit être une chaîne de caractères.',
                'nom.min' => 'Le champ nom doit contenir au moins :min caractères.',
                'nom.max' => 'Le champ nom ne peut pas dépasser :max caractères.',
                
                'prenom.required' => 'Le champ prénom est requis.',
                'prenom.string' => 'Le champ prénom doit être une chaîne de caractères.',
                'prenom.min' => 'Le champ prénom doit contenir au moins :min caractères.',
                'prenom.max' => 'Le champ prénom ne peut pas dépasser :max caractères.',
                
                'date_naissance.required' => 'Le champ date de naissance est requis.',
                'date_naissance.string' => 'Le champ date de naissance doit être une chaîne de caractères.',
                'date_naissance.regex' => 'Le format de la date de naissance est incorrect. Utilisez le format YYYY-MM-DD.',
                
                'classe.required' => 'Le champ classe est requis.',
                'classe.string' => 'Le champ classe doit être une chaîne de caractères.',
                'classe.in' => 'La classe spécifiée n\'est pas valide.',
                
                'sexe.required' => 'Le champ sexe est requis.',
                'sexe.in' => 'La valeur du champ sexe n\'est pas valide.',
            
        ];
        


    }
}
