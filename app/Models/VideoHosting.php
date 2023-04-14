<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoHosting extends Model
{
    use HasFactory;
    protected $fillable = [
        "video_id",
        "user_id",
        "comment_id",
        "like_id",
        "dislike_id",
        "tag_id	"
    ];
}
