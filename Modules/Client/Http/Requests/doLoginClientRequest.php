<?php

namespace Api\Client\Http\Requests;

use Api\Base\Rules\IranMobileNumber;
use Illuminate\Foundation\Http\FormRequest;

class doLoginClientRequest extends FormRequest
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
            'mobile' => ['required' , 'string' , new IranMobileNumber],
            'code' => ['required' , 'string']
        ];
    }
}