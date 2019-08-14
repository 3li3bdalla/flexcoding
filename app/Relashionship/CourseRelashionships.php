<?php
namespace App\Relashionships;


trait CourseRelashionships {
	


	public function videos()
	{
		return $this->hasMany(App\Video::class, 'course_id')
	}


	// public function hastags()
	// {
	// 	return $this->belongsToMany(App\Video::class, 'course_id')
	// }

}