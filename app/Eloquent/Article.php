<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'user_id',
        'content',
        'title',
    ];
}