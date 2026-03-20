<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'unique:users,email'],
            'password' => ['required', 'string'],
            'name' => ['required', 'string', 'max:30'],
            'lastname' => ['required', 'string', 'max:30'],
            'address' => ['sometimes', 'nullable', 'string', 'max:40'],
            'phone' => ['sometimes', 'nullable', 'integer'],
            'username' => ['required', 'string', 'max:30', 'unique:users,username']
        ];
    }
}
