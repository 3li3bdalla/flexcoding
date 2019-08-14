<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Relashionships\CommentRelashionships;

class Comment extends Model
{
    //

    use CommentRelashionships;


 	protected $guarded = [];

}
