<?php

namespace Api\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function creator()
    {
        return $this->morphTo(__FUNCTION__, 'creator_type', 'created_by');
    }
}
