<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorenoteRequest extends FormRequest
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
            'matiere' => 'required|string|min:2|max:50',
            'note' => 'requiered|string|regex:/^(10|[0-9])$/',

        ];
    }
}
