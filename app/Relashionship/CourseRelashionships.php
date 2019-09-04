<?php
namespace App\Relashionships;

use App\Video;
use App\Hashtag;
use App\Instructor;

trait CourseRelashionships
{
    public function videos()
    {
        return $this->hasMany(Video::class, 'course_id');
    }


    public function hashtags()
    {
        return $this->belongsToMany(Hashtag::class, 'course_hashtags', 'course_id', 'hashtag_id')->withTimestamps();
    }


    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
