<?php

namespace Api\Comment\Http\Resources;

use Api\BlogPost\Http\Resources\SimpleBlogPostResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'status' => $this->status,
            'answer_to' => $this->answer_to,
            'creator' => $this->whenLoaded($this->creator),
            'post' => new SimpleBlogPostResource($this->whenLoaded($this->modelable)),

        ];
    }
}
