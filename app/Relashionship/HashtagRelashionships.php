<?php
namespace App\Relashionships;


trait HashtagRelashionships {
	

	
	public function courses()
	{
		return $this->belongsToMany(App\Course::class, 'course_hashtags', 'hastag_id', 'course_id');
	}


	public function children()
	{
		return $this->hasMany(App\Hashtag, 'parent_id');
	}



	public function parent()
	{
		return $this->belongsTo(App\Hashtag::class, 'parent_id');
	}

}