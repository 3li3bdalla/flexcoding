<?php
namespace App\Relashionships;

use App\Course;
use App\Hashtag;

trait HashtagRelashionships
{
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_hashtags', 'hashtag_id', 'course_id')->withTimestamps();
    }


    public function children()
    {
        return $this->hasMany(Hashtag::class, 'parent_id');
    }



    public function parent()
    {
        return $this->belongsTo(Hashtag::class, 'parent_id');
    }
}
