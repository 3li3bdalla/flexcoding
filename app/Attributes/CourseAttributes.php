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


	public function getInstructorUploadVideoUrlAttribute()
	{
		return route('instructor.course.upload_videos', $this->slug);
	}


	public function getInstructorVideosUrlAttribute()
	{
		return route('instructor.video.index', $this->slug);
	}
	
	
}