<?php

namespace App\Http\Controllers\InstructorControllers;

use App\Video;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Instructor\UploadVideoAjaxForm;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        $videos =  $course->videos()->simplePaginate(10);
        return view('instructor.video.index', compact('videos', 'course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadVideoAjaxForm $request, Course $course)
    {
        $video_name =   $request->upload($course->slug);
        return $course->videos()->create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'slug' => str_slug($request->title),
                'url' =>  $video_name,
            ]
        );
        // return redirect($video_name->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
        return view('instructor.video.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video, Course $course)
    {
        // return view('instructor.video.edit', compact('video', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video->update($request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required'
        ]));
        return redirect($video->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
    }
}
