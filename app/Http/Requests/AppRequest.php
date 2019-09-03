<?php


namespace  App\Http\Requests;

use \Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;


class AppRequest extends  FormRequest
{


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAuthorizeToDo('create_user'); // the current user has authorize to do this action // handle this request
        // the current user able to hanle apprequest or not
        // true or false
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

        ];
    }





}
