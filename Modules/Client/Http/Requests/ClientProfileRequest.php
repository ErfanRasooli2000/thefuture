<?php

namespace Api\Client\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientProfileRequest extends FormRequest
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
            'fullname' => ['required' , 'string'],
            'email' => ['required' , 'email' , Rule::unique('clients' , 'email')->ignore(\Auth::guard('client')->user()->id)],
            'birthYear' => ['nullable' , 'integer' , 'between:1340,1404'],
            'birthMonth' => ['nullable' , 'integer' , 'between:1,12'],
            'birthDay' => ['nullable' , 'integer' , 'between:1,31'],
            'biography' => ['nullable' , 'string' , 'max:300'],
            'website' => ['nullable' , 'url'],
            'github' => ['nullable' , 'url'],
            'linkedin' => ['nullable' , 'url'],
            'telegram' => ['nullable' , 'url'],
        ];
    }
}
