<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Relashionships\AttachmentRelashionships;


class Attachment extends Model
{
    //

    use AttachmentRelashionships;


    
    protected $guarded = [];

}
