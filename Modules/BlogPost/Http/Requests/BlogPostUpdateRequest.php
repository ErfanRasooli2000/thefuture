<?php

namespace Api\BlogPost\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'slug' => ['required','regex:/^[a-zA-Z0-9-_]+$/', Rule::unique('blog_posts', 'slug')->ignore($this->route('blogPost')->id)],
            'content' => ['required' , 'string'],
            'description' => ['nullable' , 'string'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpg,png,jpeg,webp', 'max:2048'],
            "categories" => ['required' , 'array'],
            'categories.*' => ['required' , 'exists:categories,id'],
            "tags" => ['required' , 'array'],
            "tags.*" => ['required'],
        ];
    }
}
