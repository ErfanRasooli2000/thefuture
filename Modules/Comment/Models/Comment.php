<?php

namespace Api\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Comment\Enums\CommentStatusEnum;

class Comment extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => CommentStatusEnum::class,
    ];
    protected $guarded = [];

    public function creator()
    {
        return $this->morphTo(__FUNCTION__, 'creator_type', 'created_by');
    }

    public function modelable()
    {
        return $this->morphTo(__FUNCTION__ , 'modelable_type', 'modelable_id');
    }
}
