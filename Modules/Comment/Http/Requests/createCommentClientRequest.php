<?php

namespace Api\Comment\Http\Requests;

use Api\BlogPost\Models\BlogPost;
use Api\Client\Models\Client;
use Illuminate\Foundation\Http\FormRequest;

class createCommentClientRequest extends FormRequest
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
            'text' => 'required|string',
            'post_id' => 'required|exists:blog_posts,id',
            'answer_to' => 'nullable|exists:comments,id',
        ];
    }

    public function validated($key = null, $default = null)
    {
        $data = parent::validated();

        $data['created_by'] = auth()->guard('client')->user()->id;
        $data['creator_type'] = Client::class;
        $data['modelable_type'] = BlogPost::class;
        $data['modelable_id'] = $data['post_id'];
        unset($data['post_id']);

        return $data;
    }
}
