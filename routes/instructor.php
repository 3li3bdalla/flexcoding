<?php

Auth::routes();


Route::middleware('auth:instructor')->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');

	
	Route::resources([
		'course'=>'CourseController'
	]);

	Route::prefix('course')->name('course.')->middleware('auth:instructor')->group(function(){

		Route::get('upload/videos/{course}', 'CourseController@upload_videos')->name('upload_videos');
	});
	// reset of course routes
	



});

//√upload_vidoes
