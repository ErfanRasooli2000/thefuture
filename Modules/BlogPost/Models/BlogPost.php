<?php

namespace Api\BlogPost\Models;

use Api\Category\Models\Category;
use Api\Tag\Models\Tag;
use Api\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        "content",
        "title",
        "slug",
        "updated_by",
        "created_by",
    ];
    public function creator() :BelongsTo
    {
        return $this->belongsTo(User::class , 'created_by');
    }

    public function updater() :BelongsTo
    {
        return $this->belongsTo(User::class , 'updated_by');
    }

    public function categories() :MorphToMany
    {
        return $this->morphToMany(Category::class, 'modelable' , 'category_blogpost');
    }

    public function tags() :MorphMany
    {
        return $this->morphMany(Tag::class, 'tagable');
    }
}
