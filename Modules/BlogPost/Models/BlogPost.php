<?php

namespace Api\BlogPost\Models;

use Api\Category\Models\Category;
use Api\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(User::class , 'created_by');
    }
    public function updater()
    {
        return $this->belongsTo(User::class , 'updated_by');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
