<?php

namespace Api\Client\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class , 'client_id');
    }
}
