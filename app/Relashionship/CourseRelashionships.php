<?php
namespace App\Relashionships;


trait CourseRelashionships {
	


	public function videos()
	{
		return $this->hasMany(App\Video::class, 'course_id');
	}


	public function hastags()
	{
		return $this->belongsToMany(App\Hashtag::class, 'course_hashtags', 'course_id', 'hastag_id');
	}

	
	public function instructor()
	{
		return $this->belongsTo(App\Instructor::class, 'instructor_id');
	}

}