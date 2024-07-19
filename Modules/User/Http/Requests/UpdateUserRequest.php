<?php

namespace Api\User\Http\Requests;

use Api\Base\Enums\GenderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'username' => ['required' , Rule::unique('users' , 'username')->ignore($this->user->id, 'id')],
            'email' => ['required' , Rule::unique('users' , 'email')->ignore($this->user->id , 'id')],
            'password' => ['nullable' , 'confirmed' , 'min:8'],
            'password_confirmation' => ['exclude_if:password,null' , 'min:8' , 'same:password'],
            'biography' => ['nullable' , 'string'],
            'mobile' => ['required' , Rule::unique('user_profiles' , 'mobile')->ignore($this->user->id , 'user_id')],
//            'resume' => ['nullable' , 'file' , 'mimes:pdf'],
//            'profile' => ['nullable' , 'image' , 'mimes:jpg,jpeg,png,webp'],
            'gender' => ['required' , Rule::in(GenderEnum::values())],
            'birthday' => ['required' , 'date' , 'date_format:Y-m-d H:i:s'],
        ];
    }
}