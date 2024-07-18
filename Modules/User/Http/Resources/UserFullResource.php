<?php

namespace Api\User\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class UserFullResource extends JsonResource
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
            'username' => $this->username,
            'email' => $this->email,
            'biography' => $this->profile?->biography,
            'mobile' => $this->profile?->mobile,
            'gender' => $this->profile?->gender,
            'birthday' => $this->profile ? Carbon::createFromDate($this->profile->birthday)->format("Y-m-d H:i:s") : null,
        ];
    }
}
