<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Relashionships\VideoRelashionships;

class Video extends Model
{
    

    use VideoRelashionships;

    protected $guarded = [];



}
