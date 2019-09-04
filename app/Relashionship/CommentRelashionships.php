<?php

namespace App\Relashionships;

use App\User;
use App\Video;

trait CommentRelashionships
{
    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
