<?php
namespace App\Relashionships;


trait UserRelashionships {

	
	public function comments()
	{
		return $this->hasMany(App\Comment::class, 'user_id')
	}

}