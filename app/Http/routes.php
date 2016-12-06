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


Route::resource('posts', 'PostsController');
Route::get('/votes/upvote/{postId}', 'VotesController@upvote');
Route::get('/votes/downvote/{postId}', 'VotesController@downvote');
Route::get('/votes/total', 'VotesController@updates');
// Route::get('orm-test', function ()
// {
//     // test code here
// });




Route::get('/search', 'PostsController@search');
 


Route::get('/', 'HomeController@showWelcome');


Route::get('/sayhello/{name}', function($name) {
	$data = array('name' => $name);
	return view('my-first-view')->with($data);
});

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

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
