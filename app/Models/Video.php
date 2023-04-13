<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'video_name',
        'video',
        'user_id',
        'comment_id',
        'like_id',
        'dislike_id',
        'tag_id',
        'video_description'
    ];
}
