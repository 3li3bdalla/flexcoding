<?php
namespace App\Relashionships;

use App\Course;
use App\Comment;
use App\Attachment;

trait VideoRelashionships
{
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }



    public function comments()
    {
        return $this->hasMany(Comment::class, 'video_id');
    }



    public function attachments()
    {
        return $this->hasMany(Attachment::class, 'video_id');
    }
}
