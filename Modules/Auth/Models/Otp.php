<?php

namespace Api\Auth\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'expires_at',
        'is_used',
        'causer_type',
        'causer_id',
        'type'
    ];

    public function causer()
    {
        return $this->morphTo(__FUNCTION__ , 'causer_type', 'causer_id');
    }

    public function used()
    {
        $this->update([
            'is_used' => 1
        ]);
    }
}
