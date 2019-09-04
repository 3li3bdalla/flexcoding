<?php
namespace App\Relashionships;

use App\Video;

trait AttachmentRelashionships
{
    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }
}
