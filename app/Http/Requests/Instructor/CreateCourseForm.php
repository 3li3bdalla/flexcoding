<?php

namespace App\Http\Requests\Instructor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class CreateCourseForm extends FormRequest
{


    private $main_course_dir = 'public/course/';
    public $slug = null;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|min:10|unique:courses',
            'description'=>'required|min:50',
            'image'=>'required|image',
        ];
    }


    public function save(){
        // extract slug form the title and note that the validation for 
        // the title will disallow and repeated title 
        // and course title must not be modifed any time 
        // so notice this to the instructor
        $slug = str_slug($this->title);
        $this->slug =  $slug;

        // create folder for course by the slug and also call uplaoding cover image function 
        $image = $this->make_course_dir($slug)->upload_cover_image($slug);

        // store the course inside this instructor courses 
        // alose return the result of this query  to the controller 
        return $this->user()->courses()->create([
            'title' => $this->title,
            'description' => $this->description,
            'image' =>$image,
            'slug' =>  $slug ,
            'rate' => 0
        ]);


        // open db transactions 
        // to handle the two requset creating course and set the hashtags for 
        // this course 

        // start transaction


        // create course query



        // connect the relashanship with the hastagas 


        // role back if any with this below query fail 


    }





    private function make_course_dir($dir){
        Storage::makeDirectory($this->main_course_dir . $dir);
        return $this;
    }



    private function upload_cover_image($slug){
        // Storage::makeDirectory($directory);
        // Storage::setVisibility('file.jpg', 'public')

        $this->file('image')->store('avatars');
        return $this->image->storeAs(
            $this->main_course_dir . $slug , 'cover.jpg'
        );
    
     
    }
}
