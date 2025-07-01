<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'message',
        'ip',
        'user_agent',
        'locale',
        'country',
        'city',
        'region',
        'read',
    ];
}
