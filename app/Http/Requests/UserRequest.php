<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:6", 
        ];
    }

    public function messages(): array{
        return [
            "name.required" => "O campo nome é obrigatório",
            "email.required" => "O campo email é obrigatório",
            "email.email" => "O campo email deve ser um email válido",
            "password.min" => "O campo senha deve ter no mínimo 6 caracteres",
            "password.required" => "O campo senha é obrigatório",
        ];
    }
}
