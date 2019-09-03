<?php

namespace App\Http\Controllers;

use App\Providers\VimeoProvider;
use App\Http\Requests\AppRequest;

class VimeoController extends Controller {

    public function index(AppRequest $request){
        $request->save();
    }

}
