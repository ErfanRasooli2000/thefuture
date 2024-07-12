<?php

namespace Api\BlogPost\Models;

use Api\Category\Models\Category;
use Api\Tag\Models\Tag;
use Api\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        "content",
        "title",
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

    public function tags() :MorphToMany
    {
        return $this->morphToMany(Tag::class , 'tagable' , 'tags' , 'id' );
    }
}
