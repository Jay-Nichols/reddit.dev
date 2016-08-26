<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Auth;

class VotesController extends Controller

{
    // = 1
    // MySQL the primary key of the table posts   = posts.id
    // PHP Level an object of the class Post = $post->id
    // Laravel controller it is method parameter = $postId
	public function upvote($postId)
	{
		$userId = Auth::user()->id;
		$positiveVote = 1;
		$vote = new \App\Vote;
		$vote->post_id = $postId;
		$vote->user_id = $userId;
		$vote->vote = $positiveVote;
		$vote->save();
		return redirect()->action('PostsController@index');

	}

	// = -1
	public function downvote($postId)
	{
		$userId = Auth::user()->id;
		$negativeVote = 0;
		$vote = new \App\Vote;
		$vote->post_id = $postId;
		$vote->user_id = $userId;
		$vote->vote = $negativeVote;
		$vote->save();
		return redirect()->action('PostsController@index');
		
	}

	public function updates()
	{
		$vote = \App\Vote::firstOrCreate(['vote' => 1]);
	}

}