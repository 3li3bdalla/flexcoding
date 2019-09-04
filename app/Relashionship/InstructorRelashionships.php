<?php
namespace App\Relashionships;

use App\Course;

trait InstructorRelashionships
{
    public function courses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }
}
