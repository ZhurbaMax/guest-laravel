<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'parent_id',
        'comment',
        'created_at',
    ];
}
