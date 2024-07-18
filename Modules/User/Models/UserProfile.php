<?php

namespace Api\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class UserProfile extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'biography',
        'birthday',
        'mobile',
        'gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
