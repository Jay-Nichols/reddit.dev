<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Log;
use App\User;



class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
	// $posts = Post::paginate(4);
		$posts = Post::with('author')->paginate(10);
	return view('posts.index')->with(array('posts' => $posts));
	
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request)
	{
		if(!Auth::check()) {
		  return redirect()->action('Auth\AuthController@getLogin');
		}
		$request->session()->flash('success', 'Post was created.'); 
		return view('posts.create');
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, Post::$rules);

		$post1 = new \App\Post();
		$post1->title = $request->input('title');
		$post1->url=$request->input('url');
		$post1->content=$request->input('content');;
		$post1->created_by = Auth::user()->id;
		$post1->save();
		$request->session()->flash('success', 'Post was saved.');
		Log::info(print_r($request->input(), true));
		return redirect()->action('PostsController@create');
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{

		$post = Post::find($id);
	 

		if(!$post) {
			Log::info("Post with ID $id cannot be found");
			abort(404);
		}

		return view('posts.show')->with('post', $post);

		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{

		$post = Post::find($id);

		if(!$post) {
			Log::info("Post with ID $id cannot be found");
			abort(404);
		}
		if (!$id) {
			abort(404);
		}
		
		return view('posts.edit')->with('post', $post);

		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, Post::$rules);

		$post1 = \App\Post::find($id);
		$post1->title = $request->input('title');
		$post1->url=$request->input('url');
		$post1->content=$request->input('content');
		$post1->created_by = Auth::user()->id;
		$post1->save();
		$request->session()->flash('success', 'Post was saved.');
		Log::info(print_r($request->input(), true));
		return redirect()->action('PostsController@create');


		abort(404);
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */

	public function search(Request $request) // $_REQUEST
	{
		if($request->type == 'post'){
			$posts = Post::search($request->keyword);
			return view('posts.searchedPosts')->with('posts', $posts);
		} else {
			$users = User::search($request->keyword);
			//dd($users);
			return view('posts.searchedUsers')->with('users', $users);
		}
	}

	

	public function destroy(Request $request, $id)
	{
		$post = Post::find($id);
		
		
		if(!$id) {
			abort(404);
		} 
		$post->delete();
		$request->session()->flash('success', 'Post was deleted.');
		return redirect()->action('PostsController@store');

	}

	
}
