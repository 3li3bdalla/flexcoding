<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Relashionships\CourseRelashionships;
use App\Scopes\CourseScope;
use App\Attributes\CourseAttributes;

class Course extends Model
{
    //
    use CourseRelashionships,CourseAttributes;


    protected static function boot()
    {
        parent::boot();
        if (auth('instructor')->check()) {
            static::addGlobalScope(new CourseScope);
        }
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function path()
    {
        return "instructor/course/{$this->slug}";
    }

    protected $guarded = [];
}
