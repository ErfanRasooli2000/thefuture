<?php

namespace Api\Tag\Models;

use Api\BlogPost\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function tagable()
    {
        return $this->morphTo();
    }
}
