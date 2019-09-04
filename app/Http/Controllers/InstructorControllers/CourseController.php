<?php

namespace App\Http\Controllers\InstructorControllers;

use App\Course;
use App\Hashtag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Instructor\CreateCourseForm;

class CourseController extends Controller
{
    private $main_course_dir = 'public/course/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses =  Course::simplePaginate(10);

        return view('instructor.course.index', compact('courses'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hashtags = Hashtag::all();
        return view('instructor.course.create', compact('hashtags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCourseForm $request)
    {
        if ($request->save()) {
            return redirect(route('instructor.course.upload_videos', $request->slug));
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('instructor.course.show', compact('course'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $hashtags = Hashtag::all();
        return view('instructor.course.edit', compact('course', 'hashtags'));
    }

    private function make_course_dir($dir)
    {
        Storage::makeDirectory($this->main_course_dir . $dir);
        return $this;
    }


    private function upload_cover_image($slug)
    {
        return request('image')->storeAs(
            $this->main_course_dir . $slug,
            'cover.jpg'
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course)//CreateCourseForm $request)
    {
        $slug = str_slug($course->slug);
        $this->slug =  $slug;

        $course->title = request('title');
        $course->description = request('description');

        $image = $this->make_course_dir($slug)->upload_cover_image($slug);
        $course->image =$image;
        $hashtags = Hashtag::find(request('hashtags'));
        $course->hashtags()->attach($hashtags);
        $course->save();


        return redirect($course->path());
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/instructor/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function upload_videos(Course $course)
    {
        return view('instructor.course.upload_videos', compact('course'));
    }
}
