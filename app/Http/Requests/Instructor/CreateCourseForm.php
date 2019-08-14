<?php

namespace App\Http\Requests\Instructor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class CreateCourseForm extends FormRequest
{


    private $main_course_dir = 'course/';
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
        $slug = str_slug($this->title);
        $this->slug =  $slug;
        $image = $this->make_course_dir($slug)->upload_cover_image($slug);

        return $this->user()->courses()->create([
            'title' => $this->title,
            'description' => $this->description,
            'image' =>$image,
            'slug' =>  $slug ,
            'rate' => 0
        ]);
    }





    private function make_course_dir($dir){
        Storage::makeDirectory($this->main_course_dir . $dir);
        return $this;
    }



    private function upload_cover_image($slug){
        // Storage::makeDirectory($directory);

        return $this->image->storeAs(
            $this->main_course_dir . $slug , 'cover.jpg'
        );
    
     
    }
}
