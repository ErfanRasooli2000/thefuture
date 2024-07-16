<?php

namespace Api\Media\Database\Repos\Repositories;

use Api\Media\Database\Repos\Contracts\MediaRepositoryInterface;
use Api\Media\Models\Gallery;

class MediaRepository implements MediaRepositoryInterface
{
    public function __construct(protected Gallery $gallery){}

    public function uploadMultipleImage(array $images): void
    {
        $gallery = $this->gallery->newQuery()->firstOrCreate(['created_by' => \Auth::id()]);

        foreach ($images['images'] as $image) {
            $gallery
                ->addMedia($image)
                ->toMediaCollection('images');
        }
    }

    public function getGalleryImages(): mixed
    {
        $gallery = $this->gallery->newQuery()->first();

        if (is_null($gallery)) {
            throw new \Exception('Gallery not found');
        }

        return $gallery->getMedia('images');
    }
}
