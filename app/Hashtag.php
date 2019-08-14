<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Relashionships\HashtagRelashionships;


class Hashtag extends Model
{
    //

    use HashtagRelashionships;

   	protected $guarded = [];

}
