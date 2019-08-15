<?php

namespace App\Http\Requests\Instructor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UploadVideoAjaxForm extends FormRequest
{
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
            //
             // 'video'=>'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
            'video'=>'required',
            'title'=>'required',
            'description'=>'required'
        ];
    }



    public function upload($file_path)
    {
        $video = file_get_contents($this->video);
        $file = 'public/course/' .$file_path .'/'. uniqid() . '.mp4';
        // Storage::putFile('photos', new File($request->video))
         Storage::put($file , $video);


         return $file;
    }
}
