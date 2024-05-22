<?php

namespace Api\BlogPost\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostUpdateRequest extends FormRequest
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
            'title' => ['required' , 'string'],
            'content' => ['required' , 'string'],
            'category_id' => ['required' , 'exists:categories,id'],
        ];
    }

    public function validated($key = null, $default = null)
    {
        $data = parent::validated($key, $default); // TODO: Change the autogenerated stub

        $data['updated_by'] = \Auth::id();

        return $data;
    }
}
