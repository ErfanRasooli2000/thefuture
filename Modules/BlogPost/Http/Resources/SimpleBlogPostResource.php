<?php

namespace Api\BlogPost\Http\Resources;

use Api\Category\Http\Resources\ForSelectCategoryResource;
use Api\Category\Http\Resources\SimpleCategoryResource;
use Api\User\Http\Resources\SimpleUserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SimpleBlogPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "slug" => $this->slug,
            "title" => $this->title,
            "creator" => new SimpleUserResource($this->whenLoaded('creator')),
            'categories' => ForSelectCategoryResource::collection($this->whenLoaded('categories')),
            'created_at' => verta($this->created_at)->format('Y-m-d H:i:s'),
        ];
    }
}
