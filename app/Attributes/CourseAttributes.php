<?php

namespace App\Attributes;
/**
 * 
 */
trait CourseAttributes
{

	public function getCreatedDateAttribute()
	{
		return $this->created_at->diffForHumans();
	}

	public function getInstructorViewUrlAttribute()
	{
		return route('instructor.course.show', $this->slug);
	}
	
	
}