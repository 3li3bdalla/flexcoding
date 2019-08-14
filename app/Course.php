<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Relashionships\CourseRelashionships;

class Course extends Model
{
    //
    use CourseRelashionships;
    

    protected $guarded = [];

}
