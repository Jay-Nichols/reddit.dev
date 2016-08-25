<?php

class VotesController extends Controller

{
    // = 1
	public function upvote($postId)
	{
		$userId = Auth::user()->id
		$vote = 1;
	}

	// = -1
	public function downvote($postId)
	{
		$userId = Auth::user()->id
		$vote = -1;
		
	}

}