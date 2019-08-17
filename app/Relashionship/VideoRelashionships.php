<?php
namespace App\Relashionships;


trait VideoRelashionships {
	
	public function course()
	{
		return $this->belongsTo(\App\Course::class, 'course_id');
	}



	public function comments()
	{
		return $this->hasMany(\App\Comment::class, 'video_id');
	}



	public function attachments()
	{
		return $this->hasMany(\App\Attachment::class, 'video_id');
	}




}



