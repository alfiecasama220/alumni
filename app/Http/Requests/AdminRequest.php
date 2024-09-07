<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'firstname' => 'required',
            'middlename' => 'nullable',
            'lastname' => 'required',
            'gender' => 'required',
            'batch' => 'nullable',
            'course' => 'nullable',
            'currently' => 'nullable',
            'avatar' => 'nullable|file|max:7020',
            'role' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ];
    }

    public function messages() {
        return [
            'email.unique' => 'This email was taken to another user',
        ];
    }
}
