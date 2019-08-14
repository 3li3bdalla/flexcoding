<?php

namespace App\Relashionships;


trait CommentRelashionships {
	


	public function video()
	{
		return $this->belongsTo(App\Video::class, 'video_id');
	}


	public function user()
	{
		return $this->belongsTo(App\User::class, 'user_id');
	}



}