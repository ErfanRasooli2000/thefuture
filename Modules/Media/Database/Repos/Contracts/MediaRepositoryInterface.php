<?php

namespace Api\Media\Database\Repos\Contracts;

interface MediaRepositoryInterface
{
    public function uploadMultipleImage(array $images) :void;

    public function getGalleryImages() :mixed;
}
