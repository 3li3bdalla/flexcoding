<?php

namespace App\Attributes;
use Illuminate\Support\Str;

/**
 * 
 */
trait VideoAttributes
{

	public function getCreatedDateAttribute()
	{
		return $this->created_at->diffForHumans();
	}


	public function getSubDescriptionAttribute()
	{
		return Str::substr($this->description, 0,40);
	}

	public function getPlayerUrlAttribute()
	{
		return \Storage::url($this->url);
	}


	// public function getInstructorUploadVideoUrlAttribute()
	// {
	// 	return route('instructor.course.upload_videos', $this->slug);
	// }


	// public function getInstructorVideosUrlAttribute()
	// {
	// 	return route('instructor.video.index', $this->slug);
	// }
	
	
}