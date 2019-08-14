<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

    /*
	**	this is index page called whenever user visit the main route 
		flexcoding.net/
	**
    */

    public function index()
    {


    	return view('welcome');
    	
    }



}
