<?php

namespace Api\Client\Models;

use Api\Auth\Models\Otp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{
    use HasFactory , HasApiTokens;

    protected $fillable = [
        'mobile',
    ];

    public function otp()
    {
        return $this->morphMany(Otp::class , 'otp' , 'causer_type' , 'causer_id');
    }

    public function profile()
    {
        return $this->hasOne(ClientProfile::class , 'client_id' , 'id');
    }
}
