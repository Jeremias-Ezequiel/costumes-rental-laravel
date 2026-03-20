<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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

        $userId = $this->route('user')->id ?? $this->route('user');

        return [
            'name' => ['sometimes', 'required', 'string', 'max:30'],
            'email' => ['sometimes', 'required', 'unique:users,email,' . $userId, 'email', 'max:40'],
            'password' => ['nullable', 'string'],
            'rol_id' => ['sometimes', 'required', 'integer', 'exists:roles,id'],
            'address' => ['sometimes', 'nullable', 'max:40'],
            'phone' => ['sometimes', 'nullable', 'integer'],
            'username' => ['sometimes', 'required', 'string', 'max:30', 'unique::users,username,' . $userId],
        ];
    }
}
