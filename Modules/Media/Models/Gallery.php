<?php

namespace Api\Media\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model implements HasMedia
{
    use InteractsWithMedia;

    public $timestamps = false;

    protected $fillable = [
        'created_by'
    ];
}
