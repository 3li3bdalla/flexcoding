<?php

Auth::routes();


Route::middleware('auth:instructor')->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');

	
	Route::resources([
		'course'=>'CourseController'
	]);

	Route::prefix('course')->name('course.')->
		group(function(){
		Route::get('upload/videos/{course}', 'CourseController@upload_videos')->name('upload_videos');
	});



	// video routes	
	Route::prefix('video')->name('video.')->group(function(){

		Route::get('/{course}', 'VideoController@index')->name('index');
		Route::post('/{course}', 'VideoController@store')->name('store');
	});


});

//√upload_vidoes
