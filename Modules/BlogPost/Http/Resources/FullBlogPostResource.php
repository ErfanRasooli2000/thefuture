<?php

namespace Api\BlogPost\Http\Resources;

use Api\Category\Http\Resources\SimpleCategoryResource;
use Api\User\Http\Resources\SimpleUserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FullBlogPostResource extends JsonResource
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
            'title' => $this->title,
            'content' => $this->content,
            'creator' => new SimpleUserResource($this->whenLoaded('creator')),
            'updater' => new SimpleUserResource($this->whenLoaded('updater')),
            'category' => new SimpleCategoryResource($this->whenLoaded('category')),
            'created_at' => $this->created_at->format("Y-m-d H:i:s"),
            'updated_at' => $this->updated_at->format("Y-m-d H:i:s"),
        ];
    }
}
