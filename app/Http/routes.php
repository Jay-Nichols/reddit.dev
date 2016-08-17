<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');




Route::get('/uppercase/{word?}', 'HomeController@uppercase');

Route::get('/increment/{number?}', 'HomeController@increment');

Route::get('/add/{number1}{number2}', function ($number1, $number2) {
	return $number1 + $number2;
});

Route::get('/rolldice/{guess}', function($guess) {
	$randomNumber = rand(1,6);
	if ($guess == $randomNumber){
		return view('roll-dice')->with('randomNumber', $randomNumber);
	} 
});
