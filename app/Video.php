<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Relashionships\VideoRelashionships;
use App\Attributes\VideoAttributes;

class Video extends Model
{
    
    use VideoAttributes;

    use VideoRelashionships;

    protected $guarded = [];



}
