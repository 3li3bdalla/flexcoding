<?php
namespace App\Relashionships;

use App\Comment;

trait UserRelashionships
{
    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
}
