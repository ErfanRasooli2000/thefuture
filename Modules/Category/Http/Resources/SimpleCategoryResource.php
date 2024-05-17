<?php

namespace Api\Category\Http\Resources;

use Api\User\Http\Resources\SimpleUserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SimpleCategoryResource extends JsonResource
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
            'name' => $this->name,
            'creator' => new SimpleUserResource($this->whenLoaded('creator')),
            'updater' => new SimpleUserResource($this->whenLoaded('updater')),
            'created_at' => $this->created_at->format('Y-m-d H:i:s')
        ];
    }
}
