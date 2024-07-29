<?php

namespace Api\BlogPost\Models;

use Api\Category\Models\Category;
use Api\Comment\Models\Comment;
use Api\Tag\Models\Tag;
use Api\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class BlogPost extends Model implements HasMedia
{
    use HasFactory , SoftDeletes , LogsActivity , InteractsWithMedia;

    protected $fillable = [
        "content",
        "title",
        "slug",
        "description",
        "time_to_read",
        "created_by",
    ];

    public function getRouteKeyName()
    {
        // This is to ensure the 'slug' key is used for route model binding where specified.
        return request()->routeIs('blogPost.show') ? 'slug' : 'id';
    }

    public function creator() :BelongsTo
    {
        return $this->belongsTo(User::class , 'created_by');
    }

    public function categories() :MorphToMany
    {
        return $this->morphToMany(Category::class, 'modelable' , 'category_blogpost');
    }

    public function tags() :MorphMany
    {
        return $this->morphMany(Tag::class, 'tagable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class , 'modelable');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName($this->getTable())
            ->logAll()
            ->logExcept(['updated_at'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->dontLogIfAttributesChangedOnly(['updated_at']);
    }
}
