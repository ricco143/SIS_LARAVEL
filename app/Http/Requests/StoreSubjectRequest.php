<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
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
            'code' => ['required', 'string', 'max:5', 'unique:subjects,code'],
            'name' => ['required', 'string', 'max:255'],
            'units' => ['required', 'integer', 'between:2,3'],
            'instructor' => ['required', 'string', 'max:255'],
        ];
    }
}
