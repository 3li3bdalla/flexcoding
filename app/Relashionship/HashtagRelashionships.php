<?php
namespace App\Relashionships;

use App\Course;
use App\Hashtag;

<<<<<<< HEAD
trait HashtagRelashionships {
	
	public function courses()
	{
		return $this->belongsToMany(App\Course::class, 'course_hashtags', 'hashtag_id', 'course_id')->withTimestamps();;
	}
=======
trait HashtagRelashionships
{
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_hashtags', 'hashtag_id', 'course_id')->withTimestamps();
    }

>>>>>>> 8a63d57257f298a325e29a5212a139c012afab84

    public function children()
    {
        return $this->hasMany(Hashtag::class, 'parent_id');
    }

<<<<<<< HEAD
	public function children()
	{
		return $this->hasMany(App\HashTag, 'parent_id');
	}



	public function parent()
	{
		return $this->belongsTo(App\HashTag::class, 'parent_id');
	}

}
=======


    public function parent()
    {
        return $this->belongsTo(Hashtag::class, 'parent_id');
    }
}
>>>>>>> 8a63d57257f298a325e29a5212a139c012afab84
