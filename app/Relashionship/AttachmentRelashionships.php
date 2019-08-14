<?php
namespace App\Relashionships;


trait AttachmentRelashionships {
	
	public function video()
	{
		return $this->belongsTo(App\Video::class, 'video_id');
	}


}



