<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class replylike extends Model
{
    protected $fillable = [
        'reply_id', 'user_id'
    ];
}
