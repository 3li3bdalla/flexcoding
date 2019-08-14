<?php
namespace App\Relashionships;


trait InstructorRelashionships {
	
	public function courses()
	{
		return $this->hasMany(\App\Course::class, 'instructor_id');
	}
	

}